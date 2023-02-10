<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\preferences;
use App\Models\subscription;

class DashboardController extends Controller
{    
 public function index(){

    return view('admin/views/index')->with([
        'users' => User::count(),
        'onboarded' => preferences::count(),
        'subscribed' => subscription::where('status','active')->count(),
    ]);

 }
 public function users(){

    return view('admin/views/users_table')->with([
        'users' => User::get(),
    ]);

 }


}
