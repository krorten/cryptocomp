<?php

namespace Krorten\Cryptocomp;

use Illuminate\Support\Facades\Facade;

class CryptocompFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'CryptoComp';
    }
}