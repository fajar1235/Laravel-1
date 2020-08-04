<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('form');
    }

    public function welcome(Request $request){
        //dd($request);
        return view('welcome');

    }

    public function welcome_post(Request $request){
        // dd($request->all());
        $nama = $request["fname"];
        $lname = $request["lname"];

        return view('welcome',[
              'nama' =>$nama,
              'lname' => $lname  
        ]);
        
        
    }
}
