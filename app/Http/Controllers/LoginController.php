<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\UserServices;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{


    private UserServices $Userservices;

    public function __construct($Userservices){

        $this->Userservices = $Userservices;

    }

    public function Login():Response{

        return response()->view("Users.Login", [

            "Title" => "Login Page",
            "LogsTitle" => "Login"
        
        ]);

    }

    public function ActionLogin(Request $res):Response|RedirectResponse{

        $Username = $res->input("Username");
        $Password = $res->input("Passwors");

        if(empty($Username) OR empty($Password)){
            return response()->view("Users.Login", [

                "Title" => "Login Page",
                "error" => "User or Password is required"


        ]);

        if($this->Userservices->Login($Username, $Password)){
            $req->session()->put("Username", $Username);
            return redirect("/");
        }else{
            return response()->view("Users.Login", [

                "Title" => "Login Page",
                "error" => "User or Password is Wrong!"


        ]);

        }
    

    }
}

    
    public function Logout(){
        
    }
}
