<?php

namespace Krorten\Cryptocomp\Facades;

use Illuminate\Support\Facades\Facade;

class CryptocompFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'CryptoComp';
    }
}