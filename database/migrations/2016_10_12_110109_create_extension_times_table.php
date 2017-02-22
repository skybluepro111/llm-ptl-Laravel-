<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtensionTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extension_times', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('development_type_id')->unsigned();
            $table->integer('development_detail_id')->unsigned();
            $table->smallInteger('amount');
            $table->timestamps();

            $table->foreign('development_type_id')
                ->references('id')->on('development__types')
                ->onDelete('cascade');
//            $table->foreign('development_detail_id')
//                ->references('id')->on('development__details')
//                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('extension_times');
    }
}
