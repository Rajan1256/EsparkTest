<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->string('designation',100);
            $table->text('address1',300);
            $table->string('email',80);
            $table->text('address2',300)->nullable();
            $table->string('phone_number',15);
            $table->string('city',50);
            $table->integer('state');
            $table->tinyInteger('gender')->default(0);
            $table->string('zip_code',10);
            $table->tinyInteger('relationship_status')->default(0);
            $table->date('date_of_birth');
            $table->text('language')->nullable();
            $table->text('technologies')->nullable();
            $table->text('reference_name')->nullable();
            $table->text('reference_contacts')->nullable();
            $table->text('reference_relation')->nullable();
            $table->string('prefered_locations');
            $table->string('notice_period',30);
            $table->string('expacted_ctc');
            $table->string('current_ctc');
            $table->integer('department');
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
        Schema::dropIfExists('job_applications');
    }
}
