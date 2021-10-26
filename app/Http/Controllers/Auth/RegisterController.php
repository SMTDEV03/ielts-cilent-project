<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
   // Register function 
    public function register_index(){
        return view('auth.sign-up');
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|min:6',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        if($user){
            return redirect('/')->with('success','Registered Successfully');
        }
        return back()->withErrors(['error' => 'Something went wrong']);
    }
}
