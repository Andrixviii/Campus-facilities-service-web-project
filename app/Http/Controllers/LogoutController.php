<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    //
    function Logout(){

      auth()->logout();

      return to_route("Home");
    }
}
