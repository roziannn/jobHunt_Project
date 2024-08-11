<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Razorpay Payment</title>

    <style>
        .razorpay-payment-button {
            display: none;
        }
    </style>
</head>

<body>
    {{-- grab price/amount calc --}}
    @php
        $payableAmount = session('selected_plan')['price'] * config('gatewaySettings.razorpay_currency_rate') * 100;
    @endphp


    <form action="{{ route('company.razorpay.payment') }}" method="POST">
        @csrf
        {{-- default API for razor CDN + data attribut --}}
        <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="{{ config('gatewaySettings.razorpay_key') }}"
            data-currency="{{ config('gatewaySettings.razorpay_currency_name') }}" data-amount="{{ $payableAmount }}"
            data-buttontext="Pay" data-name="{{ session('selected_plan')['label'] . ' Package' }}"
            data-description="payment for the plan product" data-theme.color="#1ca774"></script>
    </form>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var button = document.querySelector(".razorpay-payment-button");
            button.click(); //automaticly load the button for pay
        })
    </script>
</body>

</html>
