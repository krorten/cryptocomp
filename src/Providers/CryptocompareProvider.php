<?php

namespace Krorten\Cryptocomp;

use Illuminate\Support\ServiceProvider;
use Loeken\CryptocompareApiPhpWrapper\Cryptocompare;

class CoinMcServiceProvider extends ServiceProvider
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
