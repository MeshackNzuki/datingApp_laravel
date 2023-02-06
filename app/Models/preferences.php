<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class preferences extends Model
{
    use HasFactory;
   protected $fillable =[
        'user_id',
        'intelligence',
        'goodlooks',
        'humor',
        'bedroom_skills',
        'boldness',
        'money',
        'power',
        'flirtatiousness',
        'wit',
        'endowment',
        'ass',
        'petite',
        'big_boobs',
        'min-age',
        'max-age',
   ];
}
