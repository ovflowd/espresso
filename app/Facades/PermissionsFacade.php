<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class PermissionsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'PermissionsController';
    }
}