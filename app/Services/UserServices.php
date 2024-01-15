<?php

namespace App\Services;

interface UserServices{

    function Login(string $User, string $Password):bool;

}