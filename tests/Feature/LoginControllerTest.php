<?php

// namespace Tests\Feature;

use App\Providers\ServicesProvider;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginControllerTest extends TestCase
{

    public function testLoginPage()
    {
        $this->get('/login')
        ->assertSeeText("Login")
        ->assertSeeText("Username")
        ->assertSeeText("Password");
    }

    public function testMiddlewarelogin(){
        $this->withSession([
            "Username" => "ulfhah"
        ])->get("/login")
            ->assertRedirect("/okes");
    }

    public function testLoginSuccess(){
        $this->post('/login',[
            "Username" => "ulfhah",
            "Password" => "uio8787"
        ])->assertRedirect("/okes")
            ->assertSessionHas("Username", "ulfhah");
    }

    public function testLoginUserAlReady(){
        $this->withSession([
            "Username" => "ulfhah"
        ])->post('/login',[
            "Username" => "ulfhah",
            "Password" => "uio8787"
        ])->assertRedirect("/okes");
            
    }

    
    public function testLoginNull(){
        $this->post('/login',[])
            ->assertSeeText("User or Password is required");
    }

    

    public function testLoginFailed(){
        $this->post('/login',[
            "Username" => "salah",
            "Password" => "TidakBenar"
        ])->assertSeeText("User and Password is Wrong!");
            
    }

    public function testLogout(){
        $this->withSession([
            "Username" => "ulfhah"
        ])->post("/logout")
            ->assertRedirect("/login")
            ->assertSessionMissing("Username");
    }

    public function testLogoutGuest(){
        $this->post("/logout")
            ->assertRedirect("/okes");
        }

  
}
    
