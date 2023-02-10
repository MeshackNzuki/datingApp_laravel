<?php

namespace App\Http\Controllers\Mpesa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\mpesa;
use App\Models\subscription;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Alert;

class MpesaResponseController extends Controller
{     
public function response(Request $request){
    
     
   $response =$request->getContent();
	 $response = json_decode($response ,true);
   try {
          $Item = $response['Body']['stkCallback']['CallbackMetadata']['Item'];

          $metadata = array(
            'MerchantRequestID' => $response['Body']['stkCallback']['MerchantRequestID'],
            'CheckoutRequestID' => $response['Body']['stkCallback']['CheckoutRequestID'],
            'ResultCode' => $response['Body']['stkCallback']['ResultCode'],
            'ResultDesc' => $response['Body']['stkCallback']['ResultDesc'],			  
          );

          $mpesaData = array_column($Item, 'Value', 'Name');
          $mpesaData = array_merge($metadata, $mpesaData);
            


            mpesa::where('merchantRequestID',$mpesaData['MerchantRequestID'])->update([
                'phone' => $mpesaData['PhoneNumber'],
                'transactionID' => $mpesaData['MpesaReceiptNumber'],
                'amount' => $mpesaData['Amount'],
                'status'=>'completed',
              ]);

            // Write subcription
            $start_date = Carbon::now();

            $end_date_weekly = $start_date->add(7, 'day');
            $end_date_monthly = $start_date->add(30, 'day');
            $end_date_daily = $start_date->add(3, 'day');
              

                       

            if($mpesaData['Amount'] == 150){
                  
              $user_id = mpesa::where('merchantRequestID',$mpesaData['MerchantRequestID'])->first("user_id")->user_id;

              subscription::where('user_id',$user_id)->update([
                'status' => 'active',
                'type'   => '3_days',
                'starts_on' =>$start_date,
                'starts_on' =>$end_date_daily,
                'description'=>$mpesaData['ResultDesc'],
              ]);
            
            return back()->with('success', 'Your payment has been received, Good luck on getting laid. You can Now browse        matches');

            }

            if($mpesaData['Amount'] == 500){
                  
                $user_id = mpesa::where('merchantRequestID',$mpesaData['MerchantRequestID'])->first("user_id")->user_id;

                subscription::where('user_id',$user_id)->update([
                  'status' => 'active',
                  'type'   => 'weekly',
                  'starts_on' =>$start_date,
                  'starts_on' =>$end_date_monthly,
                  'description'=>$mpesaData['ResultDesc'],
                ]);
              
              return back()->with('success', 'Your payment has been received, Good luck on getting laid. You can Now browse        matches');

              }
          
             if($mpesaData['Amount'] == 1500) 
              {
                $user_id = mpesa::where('merchantRequestID',$mpesaData['MerchantRequestID'])->first("user_id")->user_id;

                subscription::where('user_id',$user_id)->update([
                  'status' => 'active',
                  'type'   => 'monthly',
                  'starts_on' =>$start_date,
                  'starts_on' =>$end_date_monthly,
                  'description'=>$mpesaData['ResultDesc'],
                ]);
                    return back()->with('success', 'Your payment has been received, Good luck on getting laid. You can Now    browse matches');
                }
   } catch (\Throwable $th) {       
             mpesa::where('merchantRequestID',$mpesaData['MerchantRequestID'])->update([
            'status'=>'failed',
              ]);
            return back()->with('error', 'Could not process Mpesa Payment request. Please try again later');
   }     

    }  
       
}