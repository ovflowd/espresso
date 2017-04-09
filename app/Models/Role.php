<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "espreso_roles";
    public $timestamps = false;

    /**
     * Return role name from it's ID
     * Only use this on templates
     * @param $rid
     * @return mixed
     */
    public static function getRoleName($rid)
    {
        $name = Role::where('id', $rid)->first();
        return $name->name;
    }

    public static function formatAssignment($assigned_roles)
    {
        $roles = explode(';', $assigned_roles);

        foreach($roles as $role)
        {
            echo '<span class="label label-default">' . self::getRoleName($role) . '</span> ';
        }
    }

    public function exists($rname)
    {
        $role = Role::where('name', $rname)->first()->name;

        if($rname == $role)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}