<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class requests extends Model
{
    use HasFactory;

 
    public $fillable=[

        'from_user_id',
        'to_user_id',
        'status',

    ];

}
