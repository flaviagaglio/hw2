<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table)
        {
            $table->id();
            $table->string('username', 128);
            $table->string('password', 64);
            $table->string('name', 128); 
            $table->string('surname', 128);
            $table->string('email', 128);
            $table->timestamps(); });
         } /** * Reverse the migrations. * *
          @return void */
          
           public function down() { 
               Schema::drop('users'); } }