<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\media;

class ProfileController extends Controller
{  

public function profile_pic(Request $request){
    $avatarName = time().'R'.Str::random(6).'.'.$request->avatar->getClientOriginalExtension();
    $request->avatar->move(public_path('avatars'), $avatarName);   

     
    Auth()->user()->update(['avatar' => $avatarName]);

        return back()->with('success', 'Avatar updated successfully.');
    }

}