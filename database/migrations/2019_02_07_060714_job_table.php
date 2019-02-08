<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',255);
            $table->string('location',255);
            $table->string('role',255);
            $table->string('edu_qualifications',255);
            $table->integer('employer_id')->unsigned();
            $table->integer('experience');
            $table->foreign('employer_id')->references('id')->on('employer');
            $table->timestamps();
        });

        Schema::create('applied_jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('applicant_id')->unsigned();
            $table->foreign('applicant_id')->references('id')->on('applicant');
            $table->integer('job_id')->unsigned();
            $table->foreign('job_id')->references('id')->on('job');
        });

        Schema::create('saved_jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('applicant_id')->unsigned();
            $table->foreign('applicant_id')->references('id')->on('applicant');
            $table->integer('job_id')->unsigned();
            $table->foreign('job_id')->references('id')->on('job');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job');
    }
}
