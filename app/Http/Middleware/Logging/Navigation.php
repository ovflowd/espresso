<?php

namespace App\Http\Middleware\Logging;

use App\Http\Controllers\LogsController as Logs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Closure;

class Navigation
{
    private $log;

    public function __construct(Logs $logManager)
    {
        $this->log = $logManager;
    }

    public function handle(Request $request, Closure $next)
    {
        $this->log->create($request, "NAVIGATION", "Navigated to " . $request->path());
        return $next($request);
    }
}