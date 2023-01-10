<?php

namespace App\Providers;

use App\Models\Footer;
use App\Models\Service;
use App\Models\University;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);
        $nav_services = Cache::rememberForever('nav_services', function()  {
            return Service::orderBy("id", "ASC")
                ->limit(3)
                ->get();
        });

        view()->share([
            'nav_services'=> $nav_services,
        ]);
    }
}

