<?php

namespace App\Providers;

use App\Services\Contracts\CharactersService;
use App\Services\PotterService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(CharactersService::class, PotterService::class);
    }
}
