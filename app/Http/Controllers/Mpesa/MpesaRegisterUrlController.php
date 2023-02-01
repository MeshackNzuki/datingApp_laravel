<?php

namespace App\Http\Controllers\Mpesa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\mpesa;
use App\Models\subscription;
use Illuminate\Support\Facades\Log;

class MpesaRegisterUrlController extends Controller
{     


  public function getAccessToken(){

    $req = curl_init('https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials');
    curl_setopt($req, CURLOPT_HTTPHEADER, ['Authorization: Basic ' . base64_encode('yWIJoIsjeitetATbBtGNW05iGKLqWJGX:b6uAXc6R9Oa8lAjz')]);
    curl_setopt($req, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($req, CURLOPT_SSL_VERIFYPEER, false);
    $curl_response = curl_exec($req);
    $access_token=json_decode($curl_response);
    $access_token=$access_token->access_token;
    return $access_token;
  
  }
  public  function index(){     
    $access_token=$this->getAccessToken();
    $url = 'https://api.safaricom.co.ke/mpesa/c2b/v1/registerurl';
    $shortCode=4089491;
    $confirmationUrl = 'https://luckymate.net/confirmationUrl'; 
    $validationUrl = 'https://luckymate.net/validationUrl'; // path to your validation url. can be IP address that is publicly accessible or a url
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.$access_token)); //setting custom header
  
    $curl_post_data = array(
     'ShortCode' => $shortCode,
     'ResponseType' => 'Confirmed',
     'ConfirmationURL' => $confirmationUrl,
     'ValidationURL' => $validationUrl
   );
    
   $data_string = json_encode($curl_post_data);
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_POST, true);
   curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
   $curl_response = curl_exec($curl);
   print_r($curl_response);

 }   
}