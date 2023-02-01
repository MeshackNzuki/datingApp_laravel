<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\subscription as subscriptions;
use Illuminate\Http\Request;
use Alert;
class Subscription
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {


         $status = subscriptions::where("user_id", auth()->user()->id)->first('status')->status;     
    

        if ($status === "active")
        {
            return $next($request);
        }
        else{      
            Alert::info('','This Account is not activated, please choose a package and Pay to activate')   ;
            return redirect('/payment');
        }
        
    }
}
