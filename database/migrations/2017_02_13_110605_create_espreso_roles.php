<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEspresoRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('espreso_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('hex_role_color');
            $table->string('role_icon');
        });

        DB::table('espreso_roles')->insert([
            ['id' => 1, 'name' => 'User', 'hex_role_color' => '#d3d3d3', 'role_icon' => 'user'],
            ['id' => 4, 'name' => 'System Administrator', 'hex_role_color' => '#000000', 'role_icon' => 'lock'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('espreso_roles');
    }
}
