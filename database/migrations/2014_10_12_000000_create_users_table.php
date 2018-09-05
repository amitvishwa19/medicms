<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('firstname',50)->nullable();
            $table->string('lastname',50)->nullable();
            $table->string('username',50)->nullable();
            $table->string('password')->nullable();  
            $table->string('display_name',50)->nullable();
            $table->string('email',100)->nullable();
            $table->string('mobile',20)->nullable();
            $table->string('status',50)->nullable();
            $table->string('user_type',50)->default('user');         
            $table->rememberToken();
            $table->timestamps();
        });
    }
    
    //$table->string('role');
    //$table->string('url');
    //$table->string('status');
    //$table->string('display_name');

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
