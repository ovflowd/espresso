<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "espreso_roles";

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
}