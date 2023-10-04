<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawalsTable extends Migration
{
    /**
     * Run the migrations.
     * 'name',

     * @return void
     */
    public function up()
    {
        Schema::create('withdrawals', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();//not
            $table->string('acct_number')->nullable();//not
            $table->string('bank')->nullable();//not
            $table->string('amount')->nullable();//not
            $table->string('naira_equilvalent')->nullable();//not
            $table->boolean('status')->default(0);//not
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
        Schema::dropIfExists('withdrawals');
    }
}
