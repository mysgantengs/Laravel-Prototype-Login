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

        public function testTrue(){
            self::assertTrue(true);
        }
    
}