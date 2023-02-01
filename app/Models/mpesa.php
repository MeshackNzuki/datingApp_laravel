<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mpesa extends Model
{
    use HasFactory;
    protected $fillable = [
    
       'user_id' ,
       'transactionID',
       'merchantRequestID',
       'amount',
       'phone',
       'status',
       'details',

    ];
}
