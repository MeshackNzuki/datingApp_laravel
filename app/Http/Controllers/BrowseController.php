<?php

namespace App\Http\Controllers;

use App\Models\browse;
use App\Models\User;
use App\Models\requests;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;


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

       //$test = requests::where('from_user_id','1')->where('to_user_id','3')->first();
       //dd($test);
         $users = null;
         $auth = Auth::user()->sex;
         //dd($auth);
         if(Auth::user()->sex === "1"){
            $users = User::where('sex', Auth::user()->sex)->orWhere('sex',"2")->paginate(10); 
         }
         if(Auth::user()-> sex ==="2"){
            $users = User::where('sex', Auth::user()->sex)->orWhere('sex',"1")->paginate(10); 
         }
         if(Auth::user()-> sex ==="2" || Auth::user()-> sex ==="4")
         {
            $users = User::where('sex', Auth::user()->sex)->paginate(10) ;
         }

        return view('/pages/browse', [
            'users' => $users  
                 ]);

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
