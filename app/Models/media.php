<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class media extends Model
{
    protected $fillable=['user_id','name','file_name','file_hash','mime_type','path','collection','size'];
    
    use HasFactory;
    
 }