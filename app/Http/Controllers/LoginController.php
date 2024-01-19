<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\UserServices;
use App\Providers\ServicesProvider;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{


    public UserServices $Userser;

    public function __construct(UserServices $Userser){

        $this->Userser = $Userser;

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

        if(empty($Username) || empty($Password)){
            return response()->view("Users.Login", [

                "Title" => "Login Page",
                "error" => "User or Password is required"


        ]);

        if($this->Userser->Login($Username, $Password)){
            $res->session()->put("Username", $Username);
            return redirect("/");
        }else{
            return response()->view("Users.Login", [

                "Title" => "Login Page",
                "error" => "User or Password  Wrong!",
       


        ]);

        }
    

    }
}

    
    public function Logout(){
        
    }
}
