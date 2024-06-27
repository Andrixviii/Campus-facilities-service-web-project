<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //get all register information
    function Register(Request $request){

      $Account_info = [
        "Full_name" => $request->Full_name,
        "Password" => bcrypt($request->session()->get("password")),
        "Faculty" => $request->Faculty,
        "Majoring" => $request->Majoring,
        "Angkatan" => $request->Angkatan,
        "Role" => "User",
        "Number_phone"=>$request->session()->get("phone_number"),
        "email"=>$request->session()->get("email")
      ];


      $request->validate(
       [  "Full_name" => "required",
          "Faculty" => "required",
          "Majoring"  => "required",
          "Angkatan" => "required"
      ]);

      Account::create($Account_info);
      session()->forget('email');
      session()->forget('phone_number');
      session()->forget('password');
      session()->forget('password_confirm');
      return redirect()->route('login');


    }

    function get_view(){
      return view("/Registration");
    }

    function retrieve_data(Request $request){
      $request->validate(
       [  "email" => "required|email",
          "phone_number" => "required",
          "password"  => "required",
          "password_confirm"=>"required|same:password",

      ]);

        $request->session()->put($request->all());
        return redirect()->route('signup_2');
    }
}
