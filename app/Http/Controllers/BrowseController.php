<?php

namespace App\Http\Controllers;

use App\Models\browse;
use Illuminate\Http\Request;

class BrowseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('/pages/browse');
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
     * @param  \App\Models\browse  $browse
     * @return \Illuminate\Http\Response
     */
    public function show(browse $browse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\browse  $browse
     * @return \Illuminate\Http\Response
     */
    public function edit(browse $browse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\browse  $browse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, browse $browse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\browse  $browse
     * @return \Illuminate\Http\Response
     */
    public function destroy(browse $browse)
    {
        //
    }
}
