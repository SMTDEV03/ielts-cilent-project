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

    }

  
    public function show($id)
    {
 
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request)
    {
        
        $request->validate([
            'fname' => 'required|max:155',
            'lname' => 'required|max:155',
            'email' => 'required|max:255',
            'password' => 'nullable|min:6'
        ]);

        $user= User::find($request->id);
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        if($request->password){
            $user->password = bcrypt($request->password);
        }
        $user->save();

        if($user){
            return back()->with('success','Profile has been Successfully Updated');
        }
        return back()->withErrors(['error' => 'Something went wrong']);
    }

    public function destroy($id)
    {
        //
    }

}
