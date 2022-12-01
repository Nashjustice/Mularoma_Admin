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
use App\MpesaTransaction;
use App\TokenHistory;
use App\User;
use Illuminate\Support\Str;

class InvestmentController extends Controller
{
    public function index(){
        $tokens = TokenHistory::all();
        return view('user.investments', compact('tokens'));
    }
    
     public function buyToken(Request $request){
        //actual deposit balance        
        $deposit = MpesaTransaction::where('user_id', Auth::user()->id)->where('type', 'Deposit')->sum('amount');
        $buyingTokens = MpesaTransaction::where('user_id', Auth::user()->id)->where('type', 'Invest')->sum('amount');
        $depositBalance = $deposit - $buyingTokens;
        
        if($depositBalance < $request->amount){
           Session::flash('error','Your deposit balance shows you have insufficient funds'); 
           return redirect()->back();
        }else{
            //save transaction
            $transaction = new MpesaTransaction;
            $transaction->user_id = Auth::user()->id;
            $transaction->type = "Invest";
            $transaction->amount = $request->amount;
            $transaction->receipt_number = 'MT'.Str::random(8);
            $transaction->transaction_date = date('Y-m-d H:i:s');
            $transaction->phone_number = Auth::user()->phone;
            $transaction->status = "done";
            $transaction->save();
            
            $multiply = $request->amount * $request->return;
            $profit = $multiply / 100; 
            
            //save details to token history
            $th = new TokenHistory;
            $th->user_id = Auth::user()->id;
            $th->name = $request->package;
            $th->capital = $request->amount;
            $th->return_expected = $profit;
            $th->rate = $request->return;
            $th->status = "Running";
            $th->days = "1";
            $th->save();
            
            Session::flash('Success','Congratulations! You have bought a token worth Ksh.'.$request->amount); 
            return redirect()->back();
        }
    }

}
