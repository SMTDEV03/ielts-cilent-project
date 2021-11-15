<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        return view('user.dashboard');
    }

    public function profile_setting()
    {  
        return view('user.profile');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required|max:155',
            'lname' => 'required|max:155',
            'email' => 'required|unique:users|max:255',
            'password' => 'min:6',
        ]);

        $user= User::find($request->id);
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        if($request->password){
            $user->password = bcrypt($request->password);
        }
        $user->save();

        if($user){
            return back()->with('success','Registered Successfully');
        }
        return back()->withErrors(['error' => 'Something went wrong']);
    }

  
    public function show($id)
    {
 
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

}
