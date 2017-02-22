<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phases', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('application_id')->unsigned();
            $table->integer('responsibility_id')->unsigned();
            $table->integer('user_id')->unsigned();


            $table->timestamps();
            $table->softDeletes();

            $table->foreign('application_id')->references('id')->on('applications');
            $table->foreign('responsibility_id')->references('id')->on('responsibilities');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('phases');
    }
}
