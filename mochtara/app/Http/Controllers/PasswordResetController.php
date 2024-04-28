<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class PasswordResetController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
                    ? back()->with('status', __($status))
                    : back()->withErrors(['email' => __($status)]);
    }
    public function showResetForm(Request $request, $token, $email = null)
    {
        $token = $request->route('token ,$email');

        return view('pages.Auth.reset', [
            'token' => $token,
            'email' => $email,
        ]);
    }
    public function resetPassword(Request $request)
{
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $response = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => bcrypt($password)
            ])->setRememberToken(Str::random(60));

            $user->save();
        }
    );

    if ($response == Password::PASSWORD_RESET) {
        return redirect()->route('login')->with('status', __($response));
    }

    return back()->withErrors(['email' => __($response)]);
}
}