<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessingFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('highway_processing_fees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('development_type_id')->unsigned();
            $table->integer('development_detail_id')->unsigned();
            $table->integer('contractor_category_id')->unsigned();
            $table->smallInteger('amount');
            $table->timestamps();

            $table->foreign('development_type_id')
                ->references('id')->on('development__types')
                ->onDelete('cascade');
//            $table->foreign('development_detail_id')
//                ->references('id')->on('development__details');
            $table->foreign('contractor_category_id')
                ->references('id')->on('contractor__categories')
                ->onDelete('cascade');
        });

        Schema::create('ad_processing_fees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('zone_1');
            $table->string('zone_2');
            $table->string('zone_3');
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
        Schema::drop('highway_processing_fees');
        Schema::drop('ad_processing_fees');
    }
}
