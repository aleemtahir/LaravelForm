<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevContractPayment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_dev_contract_payment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fc_id')->unsigned()->nullable(); 
            $table->foreign('fc_id')->references('id')->on('tbl_foriegn_currency'); 
            $table->integer('price_i')->nullable();
            $table->string('price_w')->nullable();
            $table->integer('j_price_i')->nullable();
            $table->string('j_price_w')->nullable();
            $table->integer('deposit')->nullable();
            $table->integer('second_payment')->nullable();
            $table->integer('third_payment')->nullable();
            $table->integer('fourth_payment')->nullable();
            $table->integer('final_payment')->nullable();
            $table->integer('half_title')->nullable();
            $table->integer('half_agreement')->nullable();
            $table->integer('half_stamp_duty')->nullable();
            $table->integer('half_reg_fee')->nullable();
            $table->integer('inc_cost')->nullable();
            $table->integer('maintenance_expense')->nullable();
            $table->integer('identification_fee')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_dev_contract_payment');
    }
}
