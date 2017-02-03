<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEspresoUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('espreso_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 25)->nullable();
            $table->text('password');
            $table->string('email');
            $table->unsignedInteger('rank');

            $table->string('remember_token', 100)->nullable();
            $table->timestamps();
        });

        DB::table('espreso_users')->insert([
            'username'  => 'John Doe',
            'email'     => 'admin@example.com',
            'password'  => Hash::make('admin'),
            'rank'      => 4
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expreso_users');
    }
}
