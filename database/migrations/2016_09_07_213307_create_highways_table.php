<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHighwaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('highways', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('concessionaire_id')->unsigned();
            $table->string('code');
            $table->string('name');
            $table->string('short', 15);
            $table->integer('office_id')->unsigned();
            $table->float('lng')->nullable();
            $table->float('lat')->nullable();
            $table->timestamps();

            $table->foreign('concessionaire_id')
                ->references('id')
                ->on('concessionaires')
                ->onDelete('cascade');
            $table->foreign('office_id')
                ->references('id')
                ->on('offices')
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
        Schema::drop('highways');
    }
}
