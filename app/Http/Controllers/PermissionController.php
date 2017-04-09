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

    /**
     * Update permission
     * @param $perm_string
     * @param $rid
     */
    public function update($perm_string, $rid)
    {
        $perm = Permission::where('perm_string', $perm_string)->firstOrFail()->assigned_roles;

        Permission::where('perm_string', $perm_string)->update([
            'assigned_roles' => $perm . ';' . $rid,
        ]);
    }
}
