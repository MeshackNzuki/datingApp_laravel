<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\subscription as subscriptions;
use Illuminate\Http\Request;
use Alert;
use Carbon\Carbon;
class Subscription
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next){


         $status = subscriptions::where("user_id", auth()->user()->id)->first('status')->status;
         $ends_on = subscriptions::where("user_id", auth()->user()->id)->first('ends_on')->ends_on; 
         //simulate dates
         $now = Carbon::now();
         //$ends_on =  $now->subDays(1);         
        if($now->gte($ends_on)){
          subscriptions::where("user_id", auth()->user()->id)->update(["status" => "inactive"]);
          Alert::info('','Your subscription expired on '.$ends_on." Please pay to continue enjoying this service");
          return redirect('/payment');
        }

        if ($status === "active" )
        {
            return $next($request);
        }
        else{      
            Alert::info('','This Account is not activated, please choose a package and pay to activate');
            return redirect('/payment');
        }
        
    }
}
