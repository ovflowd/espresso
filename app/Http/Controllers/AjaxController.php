<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function system_username_exists($username, Request $request)
    {
        $query = User::where('username', $username)->count();

        if($query == 1)
        {
            return response()->json([
                'exists' => true
            ]);
        }
        else
        {
            return response()->json([
                'exists' => false
            ]);
        }
    }
}