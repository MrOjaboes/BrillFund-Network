<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrptoWithdrawalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crpto_withdrawals', function (Blueprint $table) {
            $table->id();
            $table->string('amount')->nullable();
            $table->string('bank')->nullable();
            $table->string('screenshot')->nullable();
            $table->string('acct_number')->nullable();
            $table->string('acct_name')->nullable();
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
        Schema::dropIfExists('crpto_withdrawals');
    }
}
