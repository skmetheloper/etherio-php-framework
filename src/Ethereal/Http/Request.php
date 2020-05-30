<?php

namespace Ethereal\Http;

use Symfony\Components\HttpFoundation\Request as SymfonyRequest;

class Request extends SymfonyRequest
{
    public static function capture()
    {
       return static::createFromGlobal();
    }
}
