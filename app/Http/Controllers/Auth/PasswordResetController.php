<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Password_reset;
use Illuminate\Support\Carbon;
use App\Mail\UserMail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class PasswordResetController extends Controller
{
    //  function 
    public function index(){
        return view('auth.passwords.forgotPassword');
    }
    public function password_reset(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        Password_reset::updateOrCreate([
            'email' => $request->email, 
            'token' => $token, 
            'created_at' => Carbon::now(),
        ]);

        $data = ['token'=>$token,'email'=>$request->email];
        $template = 'mail_templates.forgetPassword';
        
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new UserMail($data,$template));
        
        return back()->with('message', 'We have e-mailed your password reset link!');
    }    

    public function resetPasswordIndex(Request $request){
        $data = ['token'=>$request->token,'email'=>$request->email];
        return view('auth.passwords.reset-password',compact('data'));
    }

    public function resetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);
  
        $updatePassword = Password_reset::where([
            'email' => $request->email, 
            'token' => $request->token
        ])->first();
  
        if(!$updatePassword){
            return back()->withErrors(['error', 'Invalid token!']);
        }
  
        $user = User::where('email', $request->email)
                ->update(['password' => bcrypt($request->password)]);
 
        Password_reset::where(['email'=> $request->email])->delete();
  
        return redirect('/login')->with('message', 'Your password has been changed!');
    }
}
