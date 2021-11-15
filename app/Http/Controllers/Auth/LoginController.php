<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Login function 
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        $attr = $request->validate([
            'email' => 'required|max:255|exists:users',
            'password' => 'required|min:6',
        ]);

        if(Auth::attempt($attr)){
            return redirect('user/')->with('success','Login Successfully');
        }
        return back()->withErrors(['error' => 'Something went wrong']);
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('homepage');
    }
}
