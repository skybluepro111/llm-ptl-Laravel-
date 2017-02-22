<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('highway_id')->unsigned();
            $table->integer('authority_id')->unsigned()->nullable();
            $table->enum('type', ['highway', 'billboard']);
            $table->enum('category', ['new', 'exiting']);
            $table->string('concession')->nullable();

            $table->float('location');
            $table->enum('direction', ['north', 'south', 'east', 'west'])->nullable();
            $table->string('from_city')->nullable();
            $table->string('to_city')->nullable();
            $table->string('area')->nullable();
            $table->string('coordinates');


            $table->string('slug');
            $table->text('documents')->nullable();
            $table->text('note')->nullable();
            $table->enum('region', ['U', 'T', 'S', 'TR', 'P'])->nullable();

            $table->enum('status', collect(trans('apply.statuses'))->keys()->toArray());
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('highway_id')->references('id')->on('highways')->onDelete('cascade');
            $table->foreign('authority_id')->references('id')->on('authorities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('applications');
    }
}
