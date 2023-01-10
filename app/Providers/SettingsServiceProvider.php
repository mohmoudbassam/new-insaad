<?php

namespace App\Providers;

use App\Models\Setting;
use Config;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class SettingsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind("settings", function ($app) {
            return new Setting();
        });

        $loader = AliasLoader::getInstance();
        $loader->alias("Setting", Setting::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if (! \App::runningInConsole() && count(\Schema::getColumnListing("settings"))) {

            $settings = Setting::all(["key", "value"]);
            foreach ($settings as $setting) {
                Config::set("settings." . $setting->key, $setting->value);
            }
        }
    }
}
