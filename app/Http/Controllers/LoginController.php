<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\UserServices;
use App\Providers\ServicesProvider;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{


    private UserServices $Userser;

    public function __construct(UserServices $Userser){

        $this->Userser = $Userser;

    }

    public function Login():Response{

        return response()->view("Users.Login", [

            "Title" => "Login Page"
        
        ]);

    }

    public function ActionLogin(Request $res): Response|RedirectResponse{

        $Username = $res->input("Username");
        $Password = $res->input("Password");

        if(empty($Username) || empty($Password)){
            return response()->view("Users.Login", [

                "Title" => "Login Page",
                "error" => "User or Password is required"


        ]);
    }

        if($this->Userser->Login($Username, $Password)){
            $res->session()->put("Username", $Username);
            return redirect("/okes");
        }
            return response()->view("Users.Login", [

                "Title" => "Login Page",
                "error" => "User and Password is Wrong!"
       


        ]);

        }
    

    


    
    public function Logout(){
        
    }

}