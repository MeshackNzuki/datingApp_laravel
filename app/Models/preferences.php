<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class preferences extends Model
{
    use HasFactory;
   protected $fillable =[
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
        'age_bracket',
        'description',
        'contact' 
   ];
}
