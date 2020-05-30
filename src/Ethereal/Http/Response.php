<?php

namespace Ethereal\Http;

use Symfony\Components\HttpFoundation\Response as SymfonyResponse;

class Response extends SymfonyResponse
{
    public static function render()
    {
       return null;
    }
}
