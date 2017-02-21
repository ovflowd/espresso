<?php

namespace App\Providers;

use App\Http\Controllers\PermissionController;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('PermissionsController', function($app) {
            return new PermissionController();
        });
    }
}
