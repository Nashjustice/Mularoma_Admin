<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use App\MpesaTransaction;
use App\TokenHistory;
use Auth;
use App\User;

class HistoryController extends Controller
{    
    public function withdrawalHistory(){
        $data = MpesaTransaction::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('user.withdraw_history', ['transactions' => $data]);
    }
    
    public function tokenHistory(){

        $data = TokenHistory::where('user_id', Auth::user()->id)->get();
        return view('user.token_history', ['transactions' => $data]);
    }


}