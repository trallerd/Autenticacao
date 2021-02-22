<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
 
    public function register()
    {
        
    }

 
    public function boot()
    {
        Blade::component('components.table-list','tablelist');
        Schema::defaultStringLength(191);
    }
}
