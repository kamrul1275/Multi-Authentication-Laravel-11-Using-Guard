<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function adminLoginForm(){

        return view('backend.auth.login');

    }//end method


    function adminLogin(Request  $request){

      $request->validate([
         'email'=>'required | email',
         'password'=>'required',

      ]);

      $check = $request->all();
      //return $check;

      $data=[
        'email'=>$check['email'],
        'password'=>$check['password'],

         ];

         if(Auth::guard('admin')->attempt($data)){
             return redirect()->route('admin.dashboard')->with('success','Login Successfully');
         }else{
            return redirect()->route('admin.login')->with('errors','Invalid Credensial');
         }

    }//end method


    function adminDashboard(){

       return view("backend.admin_dashboard");

    }//end method

    function adminLogout(){

        Auth::guard('admin')->logout();

    

        return redirect()->route('admin.login')->with('success','succesfully login');

    }//end method


}
