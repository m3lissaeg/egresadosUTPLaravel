<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            //Common fields for single user, for all users > superadmin, admin, egresado
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken()->nullable();
            $table->timestamps();
            
            //Common for administrators and egresados
            $table->string('dni')->unique()->nullable();
            $table->string('lastname')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable(); 
            //$table->unsignedBigInteger('idCiudad');
            
            //common for egresado
            $table->date('birthday')->nullable();
            $table->enum('genero', ['Hombre', 'Mujer', 'Otro'])->nullable();
            $table->string('interest')->nullable(); 
            $table->string('egreso')->nullable(); 
            $table->string('mediapath')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
