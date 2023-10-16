<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransferInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfer_infos', function (Blueprint $table) {
            $table->id();
            $table->string('bank')->nullable();
            $table->string('acct_number')->nullable();
            $table->string('acct_name')->nullable();
            $table->integer('user_id')->unsigned()->references('id')->on('users')->onDelete('SET NULL');
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
        Schema::dropIfExists('transfer_infos');
    }
}
