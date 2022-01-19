<?php

namespace Bildvitta\IssPersonalizacao\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bildvitta\IssPersonalizacao\IssPersonalizacao
 */
class IssPersonalizacao extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'iss-personalizacao';
    }
}
