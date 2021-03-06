<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('highway_services_fees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('development_type_id')->unsigned();
            $table->integer('development_detail_id')->unsigned();
            $table->integer('contractor_category_id')->unsigned();
            $table->integer('amount');
            $table->timestamps();

            $table->foreign('development_type_id')
                ->references('id')->on('development__types')
                ->onDelete('cascade');
//            $table->foreign('development_detail_id')
//                ->references('id')->on('development__details')
//                ->onDelete('cascade');
            $table->foreign('contractor_category_id')
                ->references('id')->on('contractor__categories')
                ->onDelete('cascade');
        });

        Schema::create('ad_services_fees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->smallInteger('amount');
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
        Schema::drop('highway_services_fees');
        Schema::drop('ad_services_fees');
    }
}
