<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {  
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();             
            $table->string('email')->nullable();//not c
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('phone')->nullable();//not
            $table->string('photo')->nullable();//
            $table->string('gender')->nullable();//add l
            $table->string('dob')->nullable();//add l            
            $table->string('other')->nullable();
            $table->string('bank')->nullable();             
            $table->integer('user_id')->unsigned()->references('id')->on('users')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
