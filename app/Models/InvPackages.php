<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvPackages extends Model
{
    //

      protected $fillable = [
        'package_name', 'max','min', 'percent','duration'
    ];
}
