<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Services\OrderService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Stripe\Stripe;
use Stripe\Checkout\Session as StripeSession;
use Razorpay\Api\Api as RazorpayApi;


class PaymentController extends Controller
{
    function paymentSuccess(): View
    {
        return view('frontend.pages.payment-success');
    }

    function paymentError(): View
    {
        return view('frontend.pages.payment-error');
    }

    function setPaypalConfig(): array
    {
        // laravel-paypal package.
        return [
            'mode'    => config('gatewaySettings.paypal_account_mode'), // Can only be 'sandbox' Or 'live'. If empty or invalid, 'live' will be used.
            //depends on mode it will select sandbox or live.
            'sandbox' => [
                'client_id'         => config('gatewaySettings.paypal_client_id'),
                'client_secret'     => config('gatewaySettings.paypal_client_secret'),
                'app_id'            => 'APP-80W284485P519543T', // default by paypal.php on config.
            ],
            'live' => [
                'client_id'         => config('gatewaySettings.paypal_client_id'),
                'client_secret'     => config('gatewaySettings.paypal_client_secret'),
                'app_id'            => config('gatewaySettings.paypal_app_id'),
            ],

            'payment_action' => 'Sale', // Can only be 'Sale', 'Authorization' or 'Order'
            'currency'       => config('gatewaySettings.paypal_currency_name'),
            'notify_url'     => '', // Change this accordingly for your application. (for now doesn't needed.)
            'locale'         => 'en_US', // force gateway language  i.e. it_IT, es_ES, en_US ... (for express checkout only)
            'validate_ssl'   => env('PAYPAL_VALIDATE_SSL', true), // Validate SSL when creating api client.
        ];
    }

    // Paypal payment
    function payWithPaypal()
    {
        abort_if(!$this->checkSession(), 404);

        // handling payment redirect
        $config = $this->setPaypalConfig();

        $provider = new PayPalClient($config);
        $provider->getAccessToken();

        // calculate paypal amount
        $payableAmount = round(Session::get('selected_plan')['price'] * config('gatewaySettings.paypal_currency_rate'));
        //dd($paypalAmount);

        $response = $provider->createOrder([
            'intent' => 'CAPTURE',
            'application_context' => [
                'return_url' => route('company.paypal.success'),
                'cancel_url' => route('company.paypal.cancel')
            ],
            'purchase_units' => [
                [
                    'amount' => [
                        'currency_code' => config('gatewaySettings.paypal_currency_name'),
                        'value' => $payableAmount
                    ]
                ]
            ]
        ]);

        //dd($response);

        if (isset($response['id']) && $response['id'] !== NULL) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] === 'approve') {
                    return redirect()->away($link['href']);
                }
            }
        }
    }

    function paypalSuccess(Request $request)
    {
        abort_if(!$this->checkSession(), 404);

        $config = $this->setPaypalConfig();

        $provider = new PayPalClient($config);
        $provider->getAccessToken();

        // capture the payment.
        $response = $provider->capturePaymentOrder($request->token);
        //dd($response);

        if (isset($response['status']) && $response['status'] === 'COMPLETED') {
            $capture = $response['purchase_units'][0]['payments']['captures'][0];

            try {
                OrderService::storeOrder(
                    $capture['id'],
                    'PayPal',
                    $capture['amount']['value'],
                    $capture['amount']['currency_code'],
                    'paid'
                );
                OrderService::setUserPlan();

                Session::forget('selected_plan'); // cleaning session
                return redirect()->route('company.payment.success');
            } catch (\Exception $e) {
                logger('Payment ERROR >> ' . $e);
            }
        }
        return redirect()->route('company.payment.error')->withErrors(['error' => $response['error']['message']]);
    }

    function paypalCancel()
    {
        return redirect()->route('company.payment.error')->withErrors(['error' => 'Something went wrong please try again.']);
    }

    // Pay with Stripe
    function payWithStripe()
    {
        abort_if(!$this->checkSession(), 404);

        Stripe::setApiKey(config('gatewaySettings.stripe_secret_key'));

        // calculate paypal amount
        // convert into cents
        $payableAmount = round(Session::get('selected_plan')['price'] * config('gatewaySettings.stripe_currency_rate')) * 100;
        //dd($payableAmount);

        $response = StripeSession::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => config('gatewaySettings.stripe_currency_name'),
                        'product_data' => [
                            'name' => Session::get('selected_plan')['label'] . ' Package'
                        ],
                        'unit_amount' => $payableAmount
                    ],
                    'quantity' => 1
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('company.stripe.success') . '?session_id={CHECKOUT_SESSION_ID}', //ask ip is the order complete or not by session_id (or token)
            'cancel_url' => route('company.stripe.cancel')
        ]);

        return redirect()->away($response->url);
    }

    function stripeSuccess(Request $request)
    {
        abort_if(!$this->checkSession(), 404);

        Stripe::setApiKey(config('gatewaySettings.stripe_secret_key'));
        $sessionId = $request->session_id;

        $response = StripeSession::retrieve($sessionId); //it will send the request data from stripe API and store the data in this response
        if ($response->payment_status === 'paid') {
            try {
                // payment_intent is the transactionId*
                OrderService::storeOrder(
                    $response->payment_intent,
                    'stripe',
                    ($response->amount_total / 100),
                    $response->currency,
                    'paid'
                );
                OrderService::setUserPlan();

                Session::forget('selected_plan'); // cleaning session
                return redirect()->route('company.payment.success');
            } catch (\Exception $e) {
                logger('Payment ERROR >> ' . $e);
            }
        } else {
            redirect()->route('company.payment.error')->withErrors(['error' => 'Payment failed! Something went wrong please try again.']);
        }
    }

    function stripeCancel(Request $request)
    {
        redirect()->route('company.payment.error')->withErrors(['error' => 'Payment failed! Something went wrong please try again.']);
    }

    function razorpayRedirect(): View
    {
        abort_if(!$this->checkSession(), 404);

        return view('frontend.pages.razorpay-redirect');
    }

    function payWithRazorpay(Request $request)
    {
        abort_if(!$this->checkSession(), 404);

        $api = new RazorpayApi(
            config('gatewaySettings.razorpay_key'),
            config('gatewaySettings.razorpay_secret_key')
        );

        /**need to compare or double check. */
        if (isset($request->razorpay_payment_id) && $request->filled('razorpay_payment_id')) {
            $payableAmount = session('selected_plan')['price'] * config('gatewaySettings.razorpay_currency_rate') * 100;
            try {
                $response = $api->payment->fetch($request->razorpay_payment_id)->capture(['amount' => $payableAmount]);

                if ($response['status'] === 'captured') {
                    OrderService::storeOrder(
                        $response->id,
                        'razorpay',
                        ($response->amount / 100),
                        $response->currency,
                        'paid'
                    );
                    OrderService::setUserPlan();

                    Session::forget('selected_plan'); // cleaning session
                    return redirect()->route('company.payment.success');
                } else {
                    redirect()->route('company.payment.error')->withErrors(['error' => 'Something went wrong please try again.']);
                }
            } catch (\Exception $e) {
                logger($e);
                redirect()->route('company.payment.error')->withErrors(['error' => $e->getMessage()]);
            }
        }
    }

    /** check session for selected plan */
    function checkSession(): bool
    {
        if (session()->has('selected_plan')) {
            return true;
        }
        return false;
    }
}
