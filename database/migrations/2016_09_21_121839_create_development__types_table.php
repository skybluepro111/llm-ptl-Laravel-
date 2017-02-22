<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevelopmentTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('development__types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('application_category_id')->unsigned();
            $table->timestamps();

            $table->foreign('application_category_id')
                ->references('id')->on('application__categories')
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
        Schema::drop('development__types');
    }
}
