<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\UserMiddleware;

class LoginController extends Controller
{
    //get all request in login page
    function Login(Request $request){

      $logindata=
      [
          "email" => $request->email,
          "password" => $request->password
      ];


      $request->validate(
       [
          "email" => "required|email",
          "password" => "required"

        ]);




        if(Auth::attempt($logindata)){

          $role = DB::table("accounts")->where("email",$logindata["email"])->value("Role");
          //dd($role);
          if($role == "User"){
            return redirect()->route("user");
          }

          elseif($role == "Admin"){
            return  redirect()->route("admin");
          }

        }

        else{
          return to_route('login')->witherrors("Salah............");
        }

    }



    function get_view(){
      return view("/guest/login");
    }

}
