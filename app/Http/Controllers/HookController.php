<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\requests;

class HookController extends Controller
{
    public function request_hookup(Request $request ,$id){
  // dd($id);

  $req = requests::where('to_user_id',$id,)->where('from_user_id',Auth::user()->id)->first();
       if(!$req){
        requests::create([
          'from_user_id' => $request->user()->id,
          'to_user_id' => $id,
          'status' => "pending"
          ]);

          return back()->with('success', 'Request Sent check matched tab for accepted requests');
          }

      else{}

      return back()->with('error', 'You had requested this person earlier');
    }


    public function accept_hookup(Request $request ,$id){
        // dd($id);
         $req = requests::where('from_user_id',$id,)->where('to_user_id',Auth::user()->id)->update([
           'status' => "accepted"
           ]);

          // dd($req);
         return redirect('/activity');
          }


    public function decline_hookup(Request $request ,$id){
            // dd($id);
          $req = requests::where('from_user_id',$id,)->where('to_user_id',Auth::user()->id)->delete();
          //dd($req);
          return redirect('/activity');
              }
}
