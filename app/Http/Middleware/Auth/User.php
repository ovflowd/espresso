<?php

namespace App\Http\Middleware\Auth;

use App\Http\Controllers\LogsController as Logs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Closure;

class User
{
    private $log;

    public function __construct(Logs $logManager)
    {
        $this->log = $logManager;
    }

    public function handle(Request $request, Closure $next)
    {
        if(Auth::guest())
        {
            $this->log->create($request, "PERM", "Tried to access a user-only resource without being authenticated (" . $request->path() . ")");
            return redirect()->intended('/');
        }

        else
        {
            return $next($request);
        }
    }
}