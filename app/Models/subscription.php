<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subscription extends Model
{
    use HasFactory;
    public $fillable=[

      "user_id",
      "status",
      "description",
      "status",
      "starts_on",
      "ends_on",
      "type"

    ];
}
