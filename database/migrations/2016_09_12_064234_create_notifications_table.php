<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('department', ['bkpa', 'bpo', 'but', 'pw']);
            $table->integer('application_id')->unsigned();
            $table->enum('status', ['approve', 'new', 'viewed']);
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
        Schema::drop('notifications');
    }
}
