<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('transaction_id');
            $table->integer('transaction_type_id');
            $table->integer('user_id');
            $table->date('entrydate');
            $table->integer('currency_id');
            $table->integer('trasaction_status_id');
            $table->float('amount');
            $table->integer('account_head_id');
            $table->integer('site_location_id');
            $table->longText('description');
            $table->string('vatno');
            $table->integer('enterprise_id');
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
