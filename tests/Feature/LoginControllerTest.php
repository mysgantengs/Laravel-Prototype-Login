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

    public function testLoginSuccess(){
        $this->post('/login',[
            "Username" => "ulfhah",
            "Password" => "uio8787"
        ])->assertRedirect("/okes")
            ->assertSessionHas("ulfhah");
    }

    public function testLoginFailed(){
        $this->post('/login',[
            "Username" => "ulfhah",
            "Password" => "TidakBenar"
        ])->assertSeeText("User or Password  Wrong!")
            ->assertSeeText("Login")
        ->assertSeeText("Username")
        ->assertSeeText("Password");
            
    }
}
