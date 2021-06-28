<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_application_id');
            $table->string('ssc_name_of_board',100);
            $table->string('ssc_passing_year',100);
            $table->float('ssc_percentage');
            $table->string('hsc_name_of_board',100);
            $table->string('hsc_passing_year',100);
            $table->float('hsc_percentage');
            $table->string('beachelor_course_name',100)->nullable();
            $table->string('beachelor_university',100)->nullable();
            $table->string('beachelor_passing_year',100)->nullable();
            $table->float('beachelor_percentage')->nullable();
            $table->string('master_course_name',100)->nullable();
            $table->string('master_university',100)->nullable();
            $table->string('master_passing_year',100)->nullable();
            $table->float('master_percentage')->nullable();
            $table->timestamps();
            $table->foreign('job_application_id')->references('id')->on('job_applications')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education_details');
    }
}
