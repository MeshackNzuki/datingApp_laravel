<?php

namespace App\Http\Controllers\Customer\Mpesa;
use Laravel\Sanctum\HasApiTokens;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User_details\transaction;
use Illuminate\Support\Facades\Log;


class MpesaResponseController extends Controller
{     
public function response(Request $request){
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
Transaction::where('merchantRequestID',$merchantRequestID)->update([
  'type'=>'Mpesa',
  'phone' => $phone[1],
  'mpesa_transaction_id' => $transaction_id[1],
  'amount' => $amount[1],
  'status'=>'completed',
]);

    }     
}