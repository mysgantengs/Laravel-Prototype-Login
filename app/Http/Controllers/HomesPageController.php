<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomesPageController extends Controller
{
    public function Page(Request $reqts){

        if($reqts->session()->exists("Username")){
            return redirect("/okes");
        }else{
            return redirect("/login");
        }

    }
}
