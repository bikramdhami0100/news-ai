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
             // validate the request
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:6',
                // 'remember' => 'boolean',
            ]);
            $email = $request->input('email');
            $password = $request->input('password');
            $remember = $request->input('remember');
            $user=User::where('email',$email)->first();
            // return ['auth' => auth()];
            if(!auth()->attempt(['email' => $email, 'password' => $password], $remember)) {
                // show session error message
                // session(['error' => 'Credentials do not match our records.']);
                return redirect()->back()->with('error', 'Credentials do not match our records.')->withInput();

            }
            if(!$user) {
                // session(['error' => 'Credentials do not match our records.']);
                return redirect()->back()->with('error', 'Credentials do not match our records.')->withInput();
            }
            // handle remember me functionality
            auth()->login($user, $remember);
            // if user login then goto dashboard
            return redirect()->route('dashboard');
            
            // return ['request' => $request->all(),'user' => $user];
           }else {

               return view('auth.login');
           }

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
