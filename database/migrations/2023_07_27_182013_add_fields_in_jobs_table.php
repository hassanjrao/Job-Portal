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

            $table->unsignedBigInteger('job_category_id')->nullable()->after('id');
            $table->foreign('job_category_id')->references('id')->on('job_categories')->onDelete('cascade');

            $table->string("image")->after('description');

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

            $table->dropForeign(['job_category_id']);
            $table->dropColumn('job_category_id');

            $table->dropColumn('image');
        });
    }
};
