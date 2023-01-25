<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\mpesa;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class MpesaController extends Controller
{
     
public function transact(Request $request){

    $req = curl_init('https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials');
    curl_setopt($req, CURLOPT_HTTPHEADER, ['Authorization: Basic ' . base64_encode('aWrsHLr8OiGyUlh2SjNVOalHxLOzAJGt:my1Ofjv8W34lyVQx')]);
    curl_setopt($req, CURLOPT_RETURNTRANSFER, true);
    $curl_response = curl_exec($req);
    $access_token=json_decode($curl_response);
    $access_token=$access_token->access_token;
    $time_stamp=date("YmdHis");
    //joined current time with  pass - important
    $password = base64_encode("4029613706964da1cb4da9190862dea0167416ff2ddda1ac239604d439b0061ba1a69a7". $time_stamp); 
    
    
    $data = array(          
    "BusinessShortCode"=>"4029613",    
    "Password"=>$password,    
    "Timestamp"=>$time_stamp,
    "TransactionType"=> "CustomerPayBillOnline",    
    "Amount"=>$request->amount,    
    "PartyA"=>"254".substr($request->phone, -9),   
    "PartyB"=>"4029613",          
    "PhoneNumber"=>"254".substr($request->phone, -9),
    "CallBackURL"=>"https://e106-102-166-210-140.ngrok.io/api/transactionresponse", //used ngrok for localhost testing   
    "AccountReference"=>"",    
    "TransactionDesc"=>"Dating App"
                 );

    $body= json_encode($data);
    $trans=curl_init("https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest");  

    curl_setopt($trans, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Authorization:Bearer ' . $access_token));
    curl_setopt($trans, CURLOPT_POSTFIELDS, $body);
    curl_setopt($trans, CURLOPT_RETURNTRANSFER, true);

    $trans=json_decode(curl_exec($trans));

    $id = auth()->user()->id;
        try {
            mpesa::create(['users_id'=>$id,'type'=>'Mpesa','merchantRequestID'=>$trans->MerchantRequestID,'status'=>'pending']); 
        } catch (Exception $e) {
            //pass
        } 
        finally {
            return $trans; 
        }   
      
    }
}