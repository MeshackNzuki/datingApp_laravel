<?php
 
namespace App\Http\Controllers\Admin;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;
 
class AdminAuthController extends Controller
{
    public function getLogin(){
        return view('/admin/views/login');
    }
 
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
 
        if(auth()->guard('admin')->attempt(['email' => $request->input('email'),  'password' => $request->input('password')])){
            $user = auth()->guard('admin')->user();
            return redirect()->route('admin')->with('success','You are Logged in sucessfully.');
        }else {
            return back()->with('error','Whoops! invalid email and password.');
        }
    }
 
    public function logout(Request $request)
    {
        auth()->guard('admin')->logout();
        Session::flush();
        Session::put('success', 'You are logout sucessfully');
        return view('/admin/views/login');
    }
}
