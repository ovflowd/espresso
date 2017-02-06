<?php

namespace App\Http\Middleware\Auth;

use App\Http\Controllers\LogsController as Logs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Closure;

class Guest
{
    private $log;

    public function __construct(Logs $logManager)
    {
        $this->log = $logManager;
    }

    public function handle(Request $request, Closure $next)
    {
        if(Auth::check())
        {
            $this->log->create($request, "Tried to access a guest-only route (" . $request->path() . ")");
            return redirect()->intended('/dashboard');
        }

        else
        {
            return $next($request);
        }
    }
}