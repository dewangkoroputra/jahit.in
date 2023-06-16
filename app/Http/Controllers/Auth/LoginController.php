<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index(){
        return view('login');
    }

    public function login(Request $request){
        // Validate user
        $this->validate($request, [
            'email' => 'required|email|max:225',
            'password' => 'required',
        ]);

        try {
            // Sign in user
            auth()->attempt($request->only('email', 'password'));
            return redirect()->route('home');
        } catch (\Exception $e) {
            return redirect()->route('login')->withErrors([
                'error' => 'Something went wrong. Please try again later.' . $e->getMessage()
            ]);
        }
    }
    public function logout(){
        auth()->logout();
        return redirect()->route('welcome');
    }
}
