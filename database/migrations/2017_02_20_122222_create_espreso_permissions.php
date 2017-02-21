<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEspresoPermissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('espreso_permissions', function(Blueprint $table) {
            $table->increments('id');
            $table->string('perm_string');
            $table->text('assigned_roles');
        });

        DB::table('espreso_permissions')->insert([
            ['perm_string' => 'login', 'assigned_roles' => '1;4'],
            ['perm_string' => 'dashboard_access', 'assigned_roles' => '1;4'],
            ['perm_string' => 'system_access', 'assigned_roles' => '4'],
            ['perm_string' => 'system_users_read', 'assigned_roles' => '4'],
            ['perm_string' => 'system_users_write', 'assigned_roles' => '4'],
            ['perm_string' => 'system_roles_read', 'assigned_roles' => '4'],
            ['perm_string' => 'system_roles_write', 'assigned_roles' => '4'],
            ['perm_string' => 'system_permissions_read', 'assigned_roles' => '4'],
            ['perm_string' => 'system_permissions_write', 'assigned_roles' => '4'],
            ['perm_string' => 'system_logs_read', 'assigned_roles' => '4'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('espreso_permissions');
    }
}
