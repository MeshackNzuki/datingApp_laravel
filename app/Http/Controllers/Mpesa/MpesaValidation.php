<?php


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\mpesa;
use App\Models\subscription;
use Illuminate\Support\Facades\Log;


class MpesaResponseController extends Controller
{     
public function index(Request $request){
$stkArray = $request->Body;

$merchantRequestID = $stkArray['stkCallback']['MerchantRequestID'];
$checkoutRequestID = $stkArray['stkCallback']['CheckoutRequestID'];
//get amount

$metadata=$stkArray['stkCallback']['CallbackMetadata'];
$amount = array_values($metadata['Item'][0]);

//get transaction id
$transaction_id = array_values($metadata['Item'][1]);

//get transaction phone
$phone= array_values($metadata['Item'][4]);


if($amount)
{
  mpesa::where('merchantRequestID',$merchantRequestID)->update([
    'phone' => $phone[1],
    'mpesa_transaction_id' => $transaction_id[1],
    'amount' => $amount[1],
    'status'=>'completed',
  ]);
  
   $user_id = mpesa::where('merchantRequestID',$merchantRequestID)->first("user_id")->user_id;
  
   subscription::where('user_id',$user_id)->update([
    'status' => 'active',
    'details'=>'completed via mpesa',
  ]);
  return redirection('/browse');

}

mpesa::where('merchantRequestID',$merchantRequestID)->update([
  'status'=>'failed',
]);


    }  
       
}