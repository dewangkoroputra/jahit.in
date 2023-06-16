<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(){
        return view('register');
    }

    public function store(Request $request){
        // Validate user
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:225',
            'phone_number' => 'required|max:255',
            'password' => 'required',
        ]);

        try {
            // Create user
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'password' => Hash::make($request->password),
            ]);

            // Sign in user
            auth()->attempt($request->only('email', 'password'));

            // Redirect
            return redirect()->route('home');
        } catch (\Exception $e) {
            // Redirect
            return redirect()->route('register')->withErrors([
                'error' => 'Something went wrong. Please try again later.' . $e->getMessage()
            ]);
        }
    }
}
