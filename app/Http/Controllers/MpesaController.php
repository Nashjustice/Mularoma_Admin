<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use App\MpesaTransaction;
use Auth;
use App\User;
use App\Wallet;
use Illuminate\Support\Facades\Notification;
use App\Notifications\Deposit;
use App\Notifications\Activation;
use File;
use Illuminate\Support\Str;
use App\Notifications\DepositNotification;
use App\Notifications\WithdrawalNotification;

class MpesaController extends Controller
{    
    // generating access token
    public function getAccessToken(){
        $auth = base64_encode(env('MPESA_CONSUMER_KEY').':'.env('MPESA_CONSUMER_SECRET'));
        $curl = curl_init();
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => env('MPESA_BASE_URL').'/oauth/v1/generate?grant_type=client_credentials',
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => [
                    'Authorization: Basic '.$auth
                ],
                CURLOPT_RETURNTRANSFER => true,
            )
        );
        $response = json_decode(curl_exec($curl));
        curl_close($curl);

        return $response->access_token;
    }
    
    public function getAccessTokenB2C(){
        $auth = base64_encode(env('MPESA_CONSUMER_KEY_B2C').':'.env('MPESA_CONSUMER_SECRET_B2C'));
        $curl = curl_init();
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => env('MPESA_BASE_URL').'/oauth/v1/generate?grant_type=client_credentials',
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => [
                    'Authorization: Basic '.$auth
                ],
                CURLOPT_RETURNTRANSFER => true,
            )
        );
        $response = json_decode(curl_exec($curl));
        curl_close($curl);

        return $response->access_token;
    }

    //register urls
    public function registerURLS(){
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => env('MPESA_BASE_URL').'/mpesa/c2b/v2/registerurl',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode(array(
            "ShortCode" => env('MPESA_C2B_SHORTCODE'),
            "ResponseType" => "Completed",
            "ConfirmationURL" => env('APP_URL')."/callback/confirmation",
            "ValidationURL" => env('APP_URL')."/callback/validation"
        )),
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer '.$this->getAccessToken(),
            'Content-Type: application/json',
        ),
        ));

        $response = json_decode(curl_exec($curl));

        curl_close($curl);
        dd($response);
        
    }
    
    public function registerURLSB2C(){
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => env('MPESA_BASE_URL').'/mpesa/c2b/v2/registerurl',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode(array(
            "ShortCode" => env('MPESA_B2C_SHORTCODE'),
            "ResponseType" => "Completed",
            "ConfirmationURL" => env('APP_URL')."/callback/confirmation",
            "ValidationURL" => env('APP_URL')."/callback/validation"
        )),
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer '.$this->getAccessToken(),
            'Content-Type: application/json',
        ),
        ));

        $response = json_decode(curl_exec($curl));

        curl_close($curl);
        dd($response);
        
    }

    //customer to business simulation
    public function c2b(Request $request){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => env('MPESA_BASE_URL').'/mpesa/c2b/v1/simulate',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode(array(
            "ShortCode" => env('MPESA_SHORTCODE'),
            "CommandID" => "CustomerPayBillOnline",
            "Amount" => $request->amount,
            "Msisdn" => "254708374149",
            "BillRefNumber" => "MI1"
        )),
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer '.$this->getAccessToken(),
            'Content-Type: application/json',
        ),
        ));

        $response = json_decode(curl_exec($curl));
        curl_close($curl);
        
        if($response->ResponseCode == "0"){
            Session::flash('Success','Successful deposit!');
        }
        else{
           Session::flash('error','Failed to deposit!'); 
        }
        
        return redirect()->back();
    }

    public function b2c(Request $request){
        $wallet = Wallet::where('user_id',Auth::user()->id)->get();
        if($wallet[0]->main < 200){
           Session::flash('error','Insufficient funds in your main wallet. Minimum withdrawal is Ksh.200'); 
           return redirect()->back();
        }
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => env('MPESA_BASE_URL').'/mpesa/b2c/v1/paymentrequest',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => json_encode(array(
            "InitiatorName" => env('MPESA_B2C_INITIATOR'),
            "SecurityCredential" => env('MPESA_SECURITY_CREDENTIALS_B2C'),
            "CommandID" => "BusinessPayment",
            "Amount" => $request->amount,
            "PartyA" => env('MPESA_B2C_SHORTCODE'),
            "PartyB" => Auth::user()->phone,
            "Remarks" => "MULATOKEN",
            "QueueTimeOutURL" => env('APP_URL')."/callback/queue",
            "ResultURL" => env('APP_URL')."/callback/result",
            "Occasion" => "Withdrawal"
         )),
          CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer '.$this->getAccessTokenB2C(),
            'Content-Type: application/json'
          ),
        ));
        
        $response = json_decode(curl_exec($curl));
        curl_close($curl);
    
        if($response->ResponseCode == "0"){
            Session::flash('Success','Successful withdrawal! Payment will reflect in a few');
            
            //save to MPESA transactions table    
            $transaction = new MpesaTransaction;
            $transaction->user_id = Auth::user()->id;
            $transaction->type = "Withdraw";
            $transaction->amount = $request->amount;
            $transaction->receipt_number = 'QL'.Str::random(8);
            $transaction->transaction_date = date('Y-m-d H:i:s');
            $transaction->phone_number = Auth::user()->phone;
            $transaction->status = "sent";
            $transaction->save();
            
            $mailData = [
              'username' => Auth::user()->username,
              'amount' => $request->amount
           ];
      
           Notification::send($user, new WithdrawalNotification($mailData));
            
           return redirect()->back();
        }
        else{
           Session::flash('error','Failed to withdraw!'); 
           return redirect()->back();
        }
        
    }

    public function stkPush(Request $request){
        $curl = curl_init();

        $BusinessShortCode = env('MPESA_C2B_SHORTCODE');
        $Timestamp = date('YmdHis');
        $PasswordKey = env('MPESA_C2B_PASS_KEY');
        $Password=base64_encode($BusinessShortCode.$PasswordKey.$Timestamp);

        curl_setopt_array($curl, array(
        CURLOPT_URL => env('MPESA_BASE_URL').'/mpesa/stkpush/v1/processrequest',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode(array(
            "BusinessShortCode" => $BusinessShortCode,
            "Password" => $Password,
            "Timestamp" => $Timestamp,
            "TransactionType" => "CustomerPayBillOnline",
            "Amount" => $request->amount,
            "PartyA" => Auth::user()->phone,
            "PartyB" => $BusinessShortCode,
            "PhoneNumber" => Auth::user()->phone,
            "CallBackURL" => env('APP_URL')."/callback/stkpush",
            "AccountReference" => "MULATOKEN",
            "TransactionDesc" => "Mulatoken Deposit"
        )),
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer '.$this->getAccessToken(),
            'Content-Type: application/json',
        ),
        ));

        $response = json_decode(curl_exec($curl));
        curl_close($curl);
        
        if($response->ResponseCode == "0"){
           //return redirect()->to('/confirm_payment');
           Session::flash('Success','Processing payment....'); 
           $user = User::find(Auth::user()->id);
           
           $mailData = [
              'username' => Auth::user()->username,
              'amount' => $request->amount
           ];
      
           Notification::send($user, new DepositNotification($mailData));
           
           return redirect()->back();
        }
        else{
           Session::flash('error','If you are not prompted to automatically enter Mpesa PIN, use paybill 4096217, Account Number: act#'.Auth::user()->id); 
           return redirect()->back();
        }
        
    }


    /*
     *Responses coming from MPESA
     */
    public function validation(Request $request){
        // DATA
        $mpesaResponse = file_get_contents('php://input');
        // log the response
        $logFile = "MPESAConfirmationResponse.txt";
        // write to file
        $log = fopen($logFile, "a");
    
        fwrite($log, $mpesaResponse);
        fclose($log);

        return [
            'ResultCode' => 0,
            'ResultDesc' => 'Accept Service',
            'ThirdPartyTransID' => rand(3000, 10000)
        ];

    }

    public function confirmation(Request $request){
        // DATA
        $mpesaResponse = file_get_contents('php://input');
        // log the response
        $logFile = "MPESAConfirmationResponse.txt";
        // write to file
        $log = fopen($logFile, "a");
    
        fwrite($log, $mpesaResponse);
        fclose($log);

        return [
            'ResultCode' => 0,
            'ResultDesc' => 'Accept Service',
            'ThirdPartyTransID' => rand(3000, 10000)
        ];
    }

    public function queueTimeOut(Request $request){
        // DATA
        $mpesaResponse = file_get_contents('php://input');
        // log the response
        $logFile = "MPESAConfirmationResponse.txt";
        // write to file
        $log = fopen($logFile, "a");
    
        fwrite($log, $mpesaResponse);
        fclose($log);

        return [
            'ResultCode' => 0,
            'ResultDesc' => 'Accept Service',
            'ThirdPartyTransID' => rand(3000, 10000)
        ];
    }

    public function result(Request $request){
        // DATA
        $mpesaResponse = file_get_contents('php://input');
        // log the response
        $logFile = "MPESAConfirmationResponse.txt";
        // write to file
        $log = fopen($logFile, "w");
        fwrite($log, $mpesaResponse);
        fclose($log);
    }

    public function stkPushCallback(){
        // DATA
        $mpesaResponse = file_get_contents('php://input');
        // log the response
        $logFile = "MPESAConfirmationResponse.txt";
        // write to file
        $log = fopen($logFile, "w");
        fwrite($log, $mpesaResponse);
        fclose($log);
        
        //reading from txt file
        //$file = file_get_contents("MPESAConfirmationResponse.txt");
        $file2 = json_decode($file, true);
        $stkCallBack = json_encode($file2['Body']['stkCallback']);
        $callBackData = json_decode($stkCallBack,true);
        $ResultCode = json_encode($file2['Body']['stkCallback']['ResultCode']);
        
        if($ResultCode == 0){
            //get user details data in CallbackMetadata
            $CallbackMetadata = json_encode($callBackData['CallbackMetadata']['Item']);
            $data = json_decode($CallbackMetadata,true);
            $Amount = json_encode($data[0]['Value']);
            $MpesaReceiptNumber = json_encode($data[1]['Value']);
            $TransactionDate = json_encode($data[3]['Value']);
            $PhoneNumber = json_encode($data[4]['Value']);

            //save to MPESA transactions table    
            $transaction = new MpesaTransaction;
            $transaction->user_id = Auth::user()->id;
            $transaction->type = "Deposit";
            $transaction->amount = $Amount;
            $transaction->receipt_number = str_replace(['"',"'"], "", $MpesaReceiptNumber);
            $transaction->transaction_date = $TransactionDate;
            $transaction->phone_number = $PhoneNumber;
            $transaction->status = "sent";
            $transaction->save();
            
            //Notification::send(Auth::user()->email, new Deposit());
            //Notification::route('mail', Auth::user()->email)->notify(new Deposit(Auth::user()->email));
            
            $checkActivation = MpesaTransaction::where('user_id',Auth::user()->id)->first();
            $user = User::find(Auth::user()->id);

            if($checkActivation->amount == 100 && $user->activation_status == null){
              $user->activation_status = 1;
              $user->activated_by = 1;
              $user->save();
              //Notification::send(Auth::user()->email, new Activation());
              return redirect('/'.Auth::user()->username.'/dashboard');
            }
            
            return redirect('/'.Auth::user()->username.'/dashboard');

        } else{
           Session::flash('error','Payment did not go through');
           return redirect()->back();
        }
        
     }
     
    public function store(){
        //reading from txt file
        $file = \file_get_contents("MPESAConfirmationResponse.txt");
        $file2 = \json_decode($file, true);
        $stkCallBack = json_encode($file2['Body']['stkCallback']);
        $callBackData = json_decode($stkCallBack,true);
        $ResultCode = json_encode($file2['Body']['stkCallback']['ResultCode']);
        
        if($ResultCode == 0){
            //get user details data in CallbackMetadata
            $CallbackMetadata = json_encode($callBackData['CallbackMetadata']['Item']);
            $data = json_decode($CallbackMetadata,true);
            $Amount = json_encode($data[0]['Value']);
            $MpesaReceiptNumber = json_encode($data[1]['Value']);
            $TransactionDate = json_encode($data[3]['Value']);
            $PhoneNumber = json_encode($data[4]['Value']);

            //save to MPESA transactions table    
            $transaction = new MpesaTransaction;
            $transaction->user_id = Auth::user()->id;
            $transaction->type = "Deposit";
            $transaction->amount = $Amount;
            $transaction->receipt_number = str_replace(['"',"'"], "", $MpesaReceiptNumber);
            $transaction->transaction_date = $TransactionDate;
            $transaction->phone_number = $PhoneNumber;
            $transaction->status = "sent";
            $transaction->save();
            
            //Notification::send(Auth::user()->email, new Deposit());
            //Notification::route('mail', Auth::user()->email)->notify(new Deposit(Auth::user()->email));
            
            $checkActivation = MpesaTransaction::where('user_id',Auth::user()->id)->first();
            $user = User::find(Auth::user()->id);

            if($checkActivation->amount == 100 && $user->activation_status == null){
              $user->activation_status = 1;
              $user->activated_by = 1;
              $user->save();
              //Notification::send(Auth::user()->email, new Activation());
            }
            
            return redirect('/'.Auth::user()->username.'/dashboard');

        } else{
           Session::flash('error','Payment did not go through');
           return redirect()->back();
        }
        
    }

}