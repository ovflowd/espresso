<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogsController extends Controller
{

    /**
     * Create a new log inside the database
     * @param Request $request
     * @param $data
     */
    public function create(Request $request, $type, $data)
    {
        $log = new Log();

        $log->user_id = $request->user()->id ?? 0;
        $log->type = $type;
        $log->address = $request->ip();
        $log->request = $data;

        $log->save();
    }
}
