<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $table="wallets";
    
    protected $fillable = ["user_id","main","referal","token"];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}