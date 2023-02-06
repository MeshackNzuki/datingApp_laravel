<?php

namespace App\Http\Controllers;

use App\Models\preferences;
use App\Models\profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OnboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/pages/onboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {  

        $data = preferences::create([                    
        'user_id' => $request->user()->id,
        'inteligence' => $request->intelligence,
        'goodlooks' => $request->goodlooks,
        'humor'=> $request->humor,
        'bedroom_skills'=> $request->bedroom_skills,
        'boldness'=> $request->boldness,
        'money'=> $request->money,
        'power'=> $request->power,
        'flirtatiousness'=> $request->flirtatiousness,
        'wit'=>$request->wit,
        'endowment'=> $request->endowment,
        'ass'=> $request->ass,
        'petite'=> $request->petite,
        'big_boobs'=> $request->big_boobs,
        'min-age'=> $request->max_age,
        'max-age'=> $request->min_age,
        ]);
        $data->save();
        $data2 = profile::create([
            'user_id' => $request->user()->id,
            'description' => $request->description,
            'contacts' => $request->contact,
            ]);
         $data2->save();

         return redirect('/payment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\onboard  $onboard
     * @return \Illuminate\Http\Response
     */
    public function show(onboard $onboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\onboard  $onboard
     * @return \Illuminate\Http\Response
     */
    public function edit(onboard $onboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\onboard  $onboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, onboard $onboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\onboard  $onboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(onboard $onboard)
    {
        //
    }
}
