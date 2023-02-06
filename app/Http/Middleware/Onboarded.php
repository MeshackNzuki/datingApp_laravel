<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\preferences;
use Illuminate\Http\Request;
use Alert;
class Onboarded
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

         $onborded = preferences::where("user_id", auth()->user()->id)->first();     
    

        if ($onborded)
        {
            return $next($request);
        }
        else{      
            return redirect('/onboard');
        }
        
    }
}
