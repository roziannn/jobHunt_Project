<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Notifications\ResetPassword;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(): View
    {
        return view('admin.auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::broker('admins')->sendResetLink(
            $request->only('email'),
            function ($user, $token) {
                $notification = new ResetPassword($token);
                $notification->createUrlUsing(function () use ($token, $user) {
                    return route('admin.password.reset', [
                        'token' => $token,
                        'email' => $user->email
                    ]);
                });
                $user->notify($notification);
            }
        );

        return $status == Password::RESET_LINK_SENT //return handling status
            ? back()->with('status', __($status))
            : back()->withInput($request->only('email'))
            ->withErrors(['email' => __($status)]);
    }
}
