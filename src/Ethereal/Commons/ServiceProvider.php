<?php

namespace Ethereal\Commons;

use Ethereal\Foundation\Application;

abstract class ServiceProvider
{
    protected $app;

    public function use(Application $app)
    {
        $this->app = $app;
    }

    abstract public function register();

    abstract public function boot();
}
