<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
   

public function store(Request $request){

    $user_id = $request->user()->id;

    $file = $request->file('file');
    $name = $file->hashName(); 
    if (Media::where('name', $name)->exists()) {
        $name = $file->hashName(); 
    }
    Media::create(
        [
        'user_id'=> $user_id,                  
        'name' => "{$name}",
        'file_name' => $file->getClientOriginalName(),
        'mime_type' => $file->getClientMimeType(),
        'path' => "orderFiles/{$name}",
        'collection' => $request->get('collection'),
        'size' => $file->getSize(),
        ],
);      

    Storage::disk('local')->put('orderFiles/'.$file->hashName(),$file);                


return response()->json('order success');
}

}
