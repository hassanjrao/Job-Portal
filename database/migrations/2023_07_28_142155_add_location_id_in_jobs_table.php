<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jobs', function (Blueprint $table) {

            $table->unsignedBigInteger('location_id')->nullable()->after('job_category_id');
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jobs', function (Blueprint $table) {

            $table->dropForeign(['location_id']);
            $table->dropColumn('location_id');

            $table->dropSoftDeletes();
        });
    }
};
