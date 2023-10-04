<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_balances', function (Blueprint $table) {
            $table->id();
            $table->string('deposit')->nullable();
            $table->string('withdrawal')->nullable();
            $table->string('balance')->nullable();//not
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
        Schema::dropIfExists('activity_balances');
    }
}
