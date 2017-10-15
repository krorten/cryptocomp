<?php

namespace Krorten\Cryptocomp\Providers;

use Illuminate\Support\ServiceProvider;
use Loeken\CryptocompareApiPhpWrapper\Cryptocompare;

class CryptocompProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Cryptocomp', function () {
            return new cryptocompare\CryptocompareApi();
        });
    }
}
