<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Services\UserServices;
use App\Providers\ServicesProvider;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserSersTest extends TestCase
{

   
   
        private UserServices $UserSers;

        protected function setUp():void{

            parent::setUp();

            $this->aqs = $this->app->make(UserServices::class);

        }

        // public function testTrue(){
        //     self::assertTrue(true);
        // }

        public function testLogin(){

            $log = $this->aqs->Login( "ulfhah", "uio8787");
            self::assertTrue($log);

        }
    
        public function testLoginFailed(){

            $log = $this->aqs->Login( "ulfhah", "null");
            self::assertFalse($log);

        }
}
