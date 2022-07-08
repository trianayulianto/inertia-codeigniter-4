<?php

namespace Inertia;

use CodeIgniter\Config\BaseService;

class Services extends BaseService
{
    public static function inertia(bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('inertia');
        }

        return new Factory;
    }
}
