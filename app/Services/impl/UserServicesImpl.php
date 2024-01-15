<?php

namespace App\Services\impl;

use App\Services\UserServices;

class UserServicesimpl implements UserServices{

    public array $users = [

        "ulfhah" => "uio8787"

    ];
    
    public function Login(string $User, string $Password):bool{

       if(!isset($this->users[$User])){
            return false;
       
        }else{
            $pass = $this->users[$User];
            return $pass == $Password;
        }


    }

}