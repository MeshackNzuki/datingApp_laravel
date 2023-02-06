<?php

namespace App\Http\Controllers\Mpesa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\mpesa;
use App\Models\subscription;
use Illuminate\Support\Facades\Log;


class MpesaConfrimationController extends Controller
{     
public function index(Request $request){ 

 return response()->json([
  "ResultCode" => 0, 
  "ResultDesc"=> "Confirmation Received Successfully",
  'header' => "Content-Type: application/json"
 ]);
    }  
       
}