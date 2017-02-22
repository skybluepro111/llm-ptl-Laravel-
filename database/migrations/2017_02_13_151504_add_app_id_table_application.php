<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAppIdTableApplication extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('applications', function (Blueprint $table) {
            $table->string('app_id', 250)->nullable()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('applications', function (Blueprint $table) {
            $table->dropColumn('app_id');
        });
    }

}
