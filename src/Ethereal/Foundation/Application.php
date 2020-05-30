<?php

namespace Ethereal\Foundation;

use Ethereal\Container\Container;
use Ethereal\Commons\ServiceProvider;
use Ethereal\Events\EventServiceProvider;
use Ethereal\Logging\LogServiceProvider;

class Application extends Container
{
    const CURRENT_VERSION = '1.0.0';

    const CURRENT_VERSION_ID = 10000;

    protected $basePath;

    protected $providers = [];

    protected $loadedProviders = [];

    public function getVersion(): string
    {
        return self::CURRENT_VERSION;
    }

    public function getVersionId(): int
    {
        return self::CURRENT_VERSION_ID;
    }

    public function __construct(string $basePath)
    {
        $this->setBasePath($basePath);
        $this->registerCoreProviders();
    }

    public function setBasePath (string $basePath)
    {
        $this->basePath = $basePath;
    }

    public function basePath(string $path='')
    {
        return $this->basePath.($path?DIRECTORY_SEPARATOR.$path:$path);
    }

    protected function registerCoreProviders()
    {
        $this->register(new EventServiceProvider);
        $this->register(new LogServiceProvider);
    }

    public function register(ServiceProvider $provider)
    {
        $name = get_class($provider);

        $provider->use($this);
        $provider->register();

        $this->providers[] = $provider;
        $this->loadedProviders[] = $name;
    }
}
