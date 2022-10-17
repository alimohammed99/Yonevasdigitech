<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();

            $table->string('first_name');
            $table->string('surname');
            $table->string('middle_initial');
            $table->string('date_of_birth');
            $table->string('marital_status');
            $table->string('address');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('zipcode');
            $table->string('phone');
            $table->string('email');
            $table->string('highest_level_of_education');
            $table->string('elementay_school');
            $table->string('secondary_school');
            $table->string('higher_institution');
            $table->string('previous_employer');
            $table->string('job_start');
            $table->string('job_end');
            $table->string('reasons_for_leaving');
            $table->string('previous_employer_phone');
            $table->string('should_we_contact_them');
            $table->string('teaching_experience');
            $table->string('years_of_experience');
            $table->string('computer_packages');
            $table->string('free_time');
            $table->string('how_often_do_you_travel');
            $table->string('groups');
            $table->string('languages');
            $table->string('how_soon');
            $table->string('travel_for_work');
            $table->string('medical_conditions');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('careers');
    }
}
