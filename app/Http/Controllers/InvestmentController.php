<?php

namespace App\Http\Controllers;
use Auth;
use Mail;
use App\InvPackages;
use App\Investments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use App\TokenHistory;

class InvestmentController extends Controller
{
    public function index(){
        $tokens = TokenHistory::all();
        return view('user.investments', compact('tokens'));
    }

}
