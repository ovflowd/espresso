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
        });

        DB::table('espreso_roles')->insert([
            'id' => 1,
            'name' => 'User'
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
