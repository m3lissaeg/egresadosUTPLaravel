<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friends', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('friend_id');

            $table->timestamps();
        });


        //  pivot table
        Schema::create('friend_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('friend_id');
            $table->unsignedBigInteger('user_id');

            $table->unique(['friend_id','user_id']);
            $table->timestamps();

            // foreign keys
            $table->foreign('friend_id')->references('id')->on('friends')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
        });
    }


    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('friends');
    }
}
