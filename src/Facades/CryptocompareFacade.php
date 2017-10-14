<?php

namespace Krorten\Cryptocomp;

use Illuminate\Support\Facades\Facade;

class CryptocompareFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'CryptoComp';
    }
}