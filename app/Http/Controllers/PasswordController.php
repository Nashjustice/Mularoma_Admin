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
    
}
