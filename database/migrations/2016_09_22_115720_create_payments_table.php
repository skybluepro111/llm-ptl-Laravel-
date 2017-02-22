<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('application_id')->unsigned();
            $table->integer('processing_fee_id');
            //TODO delete?
            $table->smallInteger('type')->nullable();
            $table->string('other');
            $table->text('quantity')->nullable();
            $table->smallInteger('width')->nullable();
            $table->smallInteger('height')->nullable();
//            $table->smallInteger('category');
            $table->enum('pay', ['bank', 'check']);
            $table->float('sum');
            $table->date('payment_date');
            $table->smallInteger('bank');
            $table->string('slip_num');
            $table->text('review')->nullable();
            $table->enum('status', ['accepted', 'not accepted'])->nullable();
            $table->timestamps();

            $table->foreign('application_id')
                ->references('id')->on('applications')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('payments');
    }
}
