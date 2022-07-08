<?php

namespace Inertia;

use Illuminate\Support\Facades\Facade;

/**
 * @method static void setRootView(string $name)
 * @method static void share($key, $value = null)
 * @method static array getShared(string $key = null, $default = null)
 * @method static void version($version)
 * @method static int|string getVersion()
 * @method static Response render($component, array $props = [])
 * @method static \CodeIgniter\HTTP\Response location($url)
 *
 * @see \Inertia\ResponseFactory
 */
class Inertia
{
    public static function __callStatic($method, $arguments)
    {
        return Services::getSharedInstance('inertia')->{$method}(...$arguments);
    }
}
