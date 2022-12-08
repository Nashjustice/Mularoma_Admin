<?php

namespace App\Http\Controllers;
use Auth;
use Mail;
use App\InvPackages;
use App\Investments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Notification;
use App\MpesaTransaction;
use App\TokenHistory;
use App\User;
use Illuminate\Support\Str;
use App\PasswordReset;
use App\Notifications\PasswordResetNotification;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
  public function verifyEmail(Request $request){
      $user = User::whereEmail($request->email)->first();
     
      if($user == null){
          Session::flash('error', 'User email not found');
          return redirect()->back();
      }
      
      $token = Str::random(50);
      
      $pr = new PasswordReset;
      $pr->email = $request->email;
      $pr->token = $token;
      $pr->created_at = date('Y-m-d H:i:s');
      $pr->updated_at = date('Y-m-d H:i:s');
      $pr->save();
      
      $mailData = [
         'token' => $token 
      ];
      
      Notification::send($user, new PasswordResetNotification($mailData));
      
      Session::flash('Success', 'Reset url sent to your email');
      return redirect()->back();
  }
  
  public function resetPassword(Request $request){
      $rp = PasswordReset::where('email',$request->email)->first();
     
      if($rp != null){
         $user = User::whereEmail($request->email)->first(); 
         
         if($request->password != $request->confirm_password){
           Session::flash('error', 'Password mismatch');
           return redirect()->back();  
         }
         $user->password = Hash::make($request->password) ;
         $user->save();
         
         $rp->delete();
         
         Session::flash('Success', 'Password reset successful');
         return redirect()->to('/login');
      }
  }
    
}
