<?php

namespace App\Http\Controllers\Mpesa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\mpesa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Exception;
use RealRashid\SweetAlert\Facades\Alert;

class MpesaController extends Controller
{


public function getAccessToken(){

  $req = curl_init('https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials');
  curl_setopt($req, CURLOPT_HTTPHEADER, ['Authorization: Basic ' . base64_encode('yWIJoIsjeitetATbBtGNW05iGKLqWJGX:b6uAXc6R9Oa8lAjz')]);
  curl_setopt($req, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($req, CURLOPT_SSL_VERIFYPEER, false);
  $curl_response = curl_exec($req);
      //Getting timeout
      if ($curl_response === false) {
        Alert::error('',"Could not process request");
       throw new Exception(curl_error($req), curl_errno($req));
   }

  $access_token=json_decode($curl_response);
  $access_token=$access_token->access_token;
  return $access_token;
}


public function transact(Request $request){
    
    $access_token=$this->getAccessToken();
    $time_stamp=date("YmdHis");
 
    //joined current time with  pass - important
    $password = base64_encode("4089491b4e27b17e83f36e7e5c7a59f49843b4927822ba9c21e000b4b5543ad017a51bd".$time_stamp); 
   // Shortcode+Passkey+Timestamp
    
    $data = array(      
   "BusinessShortCode"=>"4089491",    
   "Password"=>     $password,
   "Timestamp"=>$time_stamp,    
   
   "TransactionType"=> "CustomerPayBillOnline",       
   //"Amount"=>$request->amount,    
   "Amount"=>'1',    
   "PartyA"=>"254".substr($request->phone, -9),   
   "PartyB"=>"4089491", 

   "PhoneNumber"=>"254".substr($request->phone, -9),
   "CallBackURL"=>"https://78f5-102-2-236-146.in.ngrok.io/api/transactionresponse",
   "AccountReference"=>"LuckyMate Entertainment",    
   "TransactionDesc"=>"LuckyMate Entertainment"
    );


    $body= json_encode($data);
    $trans=curl_init("https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest");

    curl_setopt($trans, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Authorization:Bearer ' . $access_token));
    curl_setopt($trans, CURLOPT_POSTFIELDS, $body);
    curl_setopt($trans, CURLOPT_RETURNTRANSFER, true);
    $trans=json_decode(curl_exec($trans)); //dd($trans);

   try {
   $id = $request->user()->id; 
   mpesa::create(['user_id'=>$id,'type'=>'Mpesa','merchantRequestID'=>$trans->MerchantRequestID,'status'=>'pending']);
   Alert::success('',"We have send Mpesa PIN prompt to your handset on ". $request->phone. " for account LuckyMateEntertainment, please input PIN.");
    return redirect('/payment');
   } catch (\Throwable $th) {
   Alert::error('',"Could not process your request");
   return back();
   }

    }    

}
