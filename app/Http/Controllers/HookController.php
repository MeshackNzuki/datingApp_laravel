<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\requests;

class HookController extends Controller
{
    public function request_hookup(Request $request ,$id){
  // dd($id);
     requests::create([
     'from_user_id' => $request->user()->id,
     'to_user_id' => $id,
     'status' => "pending"
     ]);
   return redirect('/browse');
    }


    public function accept_hookup(Request $request ,$id){
        // dd($id);
           requests::where('from_user_id',$id,)->update([
           'status' => "accepted"
           ]);
         return redirect('/activity');
          }


    public function decline_hookup(Request $request ,$id){
            // dd($id);
            requests::where('from_user_id',$id,)->delete();
          
          return redirect('/activity');
              }
}
