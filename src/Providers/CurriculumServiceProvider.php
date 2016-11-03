<?php

namespace Scool\Curriculum\Providers;

use Illuminate\Support\ServiceProvider;

class CurriculumServiceProvider extends ServiceProvider {

    public function register()
    {
        
    }

    public function boot()
    {
        //dd(__DIR__.'/../../database/migrations');
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
    }
}