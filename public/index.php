<?php

/**
 * @package   Etherio
 * @version   1.0.0
 * @copyright 2020 Ethereal
 * @author    Shin Maung<shinmaungmaung@gmail.com>
 */

define('REQUEST_START', microtime(true));

require __DIR__.'/../vendor/autoload.php';

$app = new Ethereal\Foundation\Application;

$kernel = new App\Http\Kernel($app);

$response = $kernel->handle(
    Ethereal\Http\Request::createFromGlobal()
);

$kernel->terminate();
