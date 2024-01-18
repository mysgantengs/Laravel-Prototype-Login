<?php

// namespace Tests\Feature;

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
        ])
            ->assertRedirect("/")
            ->assertSessionHas("ulfhah", "uio8787");
    }
}
