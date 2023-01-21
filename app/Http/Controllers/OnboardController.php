<?php

namespace App\Http\Controllers;

use App\Models\onboard;
use Illuminate\Http\Request;

class OnboardController extends Controller
{
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
    public function create()
    {
        //
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
