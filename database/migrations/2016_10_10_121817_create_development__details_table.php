<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevelopmentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('development__details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('development_type_id')->unsigned();
            $table->timestamps();

            $table->foreign('development_type_id')
                ->references('id')->on('development__types')
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
        Schema::drop('development__details');
    }
}
