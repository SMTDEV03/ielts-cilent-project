<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
   // Register function 
    public function index(){
        return view('auth.sign-up');
    }

    public function register(Request $request){
        $request->validate([
            'fname' => 'required|max:155',
            'lname' => 'required|max:155',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'role_id' => 1,
            'password' => bcrypt($request->password),
        ]);
        if($user){
            return redirect('/login')->with('success','Registered Successfully');
        }
        return back()->withErrors(['error' => 'Something went wrong']);
    }
}
