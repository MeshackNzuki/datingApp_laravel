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
        //Getting timeout
        if ($curl_response === false) {
          Alert::error('',"Could not process request");
         throw new Exception(curl_error($req), curl_errno($req));
     }
  
    $access_token=json_decode($curl_response);
    $access_token=$access_token->access_token;
    return $access_token;
  }
    public  function index(){     
      $access_token=$this->getAccessToken();
      $url = 'https://api.safaricom.co.ke/mpesa/c2b/v1/register_url';
      $shortCode=4089491;
      $confirmationUrl = 'https://luckymate.net/api/confirmation_url'; 
      $validationUrl = 'https://luckymate.net/api/validation_url'; 
      
      $curl_post_data = array(
        'ShortCode' => $shortCode,
        'ResponseType' => 'Completed',
        'ConfirmationURL' => $confirmationUrl,
        'ValidationURL' => $validationUrl
      );
      
      $data_string = json_encode($curl_post_data);
    
    
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, $url);
      curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.$access_token));  
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      //curl_setopt($curl, CURLOPT_HTTPGET ,true);
      curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
      $curl_response = curl_exec($curl);
      print_r($curl_response);

 }   
}