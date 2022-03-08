<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sender_id')->nullable();
            $table->string('receiver_id')->nullable();
            $table->string('status')->default('pending');
            $table->float('sent_amount')->nullable();
            $table->float('received_amount')->nullable();
            $table->float('rate')->nullable();
            $table->longText('comment')->nullable();
            $table->unsignedBigInteger('source_currency')->nullable();
            $table->unsignedBigInteger('target_currency')->nullable();
            $table->foreign('sender_id')->references('id')->on('users');
            $table->foreign('source_currency')->references('id')->on('currencies');
            $table->foreign('target_currency')->references('id')->on('currencies');
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
        Schema::dropIfExists('transactions');
    }
}
