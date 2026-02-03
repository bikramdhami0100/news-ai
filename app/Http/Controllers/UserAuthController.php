<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserAuthController extends Controller
{
    //
    public function login(Request $request)
    {

           if($request->isMethod('post')) {
            $email = $request->input('email');
            $password = $request->input('password');
            $remember = $request->input('remember');
            $user=User::where('email',$email)->first();
            // return ['auth' => auth()];
            if(!auth()->attempt(['email' => $email, 'password' => $password], $remember)) {
                return ['success' => false, 'message' => 'Invalid credentials'];
            }
            if(!$user) {
                return ['success' => false, 'message' => 'User not found'];
            }
            // handle remember me functionality
            auth()->login($user, $remember);
            // if user login then goto dashboard
            return redirect()->route('dashboard');
            
            // return ['request' => $request->all(),'user' => $user];
           }
            return view('auth.login');

    }

    public function logout(Request $request)
    {
        auth()->logout();
        return redirect()->route('login')->with('success', 'You have been logged out successfully.');
    }
    public function register()
    {
        // return view('auth.signup');
        return 'Not Implemented';
    }
    public function forgot_password()
    {
        return view('auth.forgot_password');
    }
}
