<?php

/**
 * Permissions check Middleware
 * Checks on every request if a user has the given permission to request a specific ressource
 */

namespace App\Http\Middleware\Permissions;

use App\Http\Controllers\LogsController as Logs;
use App\Http\Controllers\PermissionController as Permissions;

use Closure;
use Illuminate\Http\Request;

class HasPermission
{
    private $log;

    public function __construct(Logs $logManager, Permissions $permManager)
    {
        $this->log = $logManager;
        $this->perm = $permManager;
    }

    public function handle(Request $request, Closure $next)
    {
        if(isset($request->required_perm))
        {
            if($this->perm->hasPermission($request->user(), $request->required_perm))
            {
                array_except($request->all(), ['required_perm']);
                return $next($request);
            }
            else
            {
                $this->log->create($request, 'PERM', 'Request made on a ressource without given permissions (' . $request->path() . ')');
                return redirect()->back();
            }
        }
        else
        {
            return $next($request);
        }
    }
}