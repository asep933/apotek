<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class AuthController extends Controller
{
    public function register(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:15',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ]);

        if($validator->fails()) {
            return redirect("/sign-up")->withErrors([
                'message' => 'bad request'
            ]);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => 2,
            'password' => $request->password,
        ]);

        Auth::login($user);
        $request->session()->regenerate();

        return redirect()->intended("/")->with('message', 'success register');
    }
    public function login(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);

        if($validator->fails()) {
            return redirect("/sign-in")->with([
                'status' => 500,
                'message' => 'bad request'
            ]);
        }

        if(Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('message', 'success login');
        }

        return back()->withErrors([
            'message' => 'error login'
        ]);
    }
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect('/')->with('message', 'success logout');
    }
    public function forgot(Request $request)
    {
        $request->validate(['email' => 'required|email']);
    
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT ?
        back()->with(['message' => __($status)]) : 
        back()->withErrors(['email' => __($status)]);
    }
    public function reset(Request $request): RedirectResponse
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5|confirmed',
        ]);
     
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
     
                $user->save();
     
                event(new PasswordReset($user));
            }
        );
     
        return $status === Password::PASSWORD_RESET
                    ? redirect()->route('sign-in')->with('message', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
    }
}
