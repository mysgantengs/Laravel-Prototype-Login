<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LoginController extends Controller
{
    public function Login():Response{

        return response()->view("Users.Login", [

            "Title" => "Login Page",
            "LogsTitle" => "Login"
        
        ]);

    }

    public function ActionLogin(){

    }

    public function Logout(){
        
    }
}
