<?php

namespace App\Providers;
use App\Services\UserServices;
use App\Services\impl\UserServicesimpl;

use Illuminate\Support\ServiceProvider;

class ServicesProvider extends ServiceProvider 
// implements DeferrableProvider
{
    
    public array $singletons = [

        UserServices::class => UserServicesimpl::class

    ];

    public function provides(){
        
        return[UserServices::class];
    
    }

    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
