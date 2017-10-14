# cryptocomp
Laravel wrapper using loeken/cryptocompare-api-php-wrapper

**Ccryptocomp** is a cryptocompare.com api wrapper for Laravel 5.5

## Install

    composer require krorten/cryptocomp

### Post Install
After installing, register the `Kroten\Cryptocomp\Providers\CryptocompProvider` in your `config/app.php` configuration file:

```php
'providers' => [
    // Other service providers...

    Kroten\Cryptocomp\Providers\CryptocompProvider::class,
],
```

Also, add the `Cryptocomp` facade to the `aliases` array in your `app` configuration file:

```php
'Cryptocomp' => Kroten\Cryptocomp\Facades\CryptocompFacade::class,    

See the [API documentation](https://cryptocompare.com/api/) for more information about the endpoints and responses.

## License

Cryptocompare is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)