<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function __construct() {}

    /**
     * Check if a user object has the specified permission
     * If your permission check doesn't fall inside a template or view, inject this in your class
     * @param User $user
     * @param $permission
     * @return bool
     */
    public function hasPermission(User $user, $permission)
    {
        $data = Permission::where('perm_string', $permission)->firstOrFail()->assigned_roles;
        $assigned = explode(';', $data);

        if(in_array($user->rank, $assigned))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
