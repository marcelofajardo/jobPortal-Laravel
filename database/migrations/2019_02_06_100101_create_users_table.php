<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('applicant');
        Schema::create('applicant', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('firstname',255);
            $table->string('lastname',255);
            $table->integer('age');
            $table->string('gender',50);
            $table->string('email',255);
            $table->string('password',255);
            $table->bigInteger('phone');
            $table->string('edu_qualifications',255);
            $table->string('hash',255);
            $table->integer('is_verified');
            $table->timestamps();
        });

        Schema::create('resume', function (Blueprint $table) {
            $table->increments('id');
            $table->string('resume_name',255);
            $table->integer('applicant_id')->unsigned();
            $table->foreign('applicant_id')->references('id')->on('applicant');
        });

        Schema::create('address', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address1',255);
            $table->string('address2',255);
            $table->string('city',255);
            $table->string('state',255);
            $table->integer('pincode');
            $table->integer('applicant_id')->unsigned();
            $table->foreign('applicant_id')->references('id')->on('applicant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicant');
    }
}
