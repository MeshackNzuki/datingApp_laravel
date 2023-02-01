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
  header("Content-Type: application/json");

  $response = '{
      "ResultCode": 0, 
      "ResultDesc": "Confirmation Received Successfully"
  }';

  // DATA
  $mpesaResponse = file_get_contents('php://input');

  // log the response
  $logFile = "M_PESAConfirmationResponse.txt";

  // write to file
  $log = fopen($logFile, "a");

  fwrite($log, $mpesaResponse);
  fclose($log);

  echo $response;


    }  
       
}