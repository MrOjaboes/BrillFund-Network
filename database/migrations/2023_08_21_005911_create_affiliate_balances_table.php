<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffiliateBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliate_balances', function (Blueprint $table) {
            $table->id();
            $table->string('deposit')->nullable();
            $table->string('withdrawal')->nullable();
            $table->string('naira_equilvalent')->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('affiliate_balances');
    }
}
