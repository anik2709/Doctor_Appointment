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
        Schema::create('doctor_academic_qualifications', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('doctor_details_id');
            $table->string('institution_name');
            $table->string('degree_name');
            $table->string('degree_from');
            $table->string('degree_to');
            $table->string('degree_status');
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
        Schema::dropIfExists('doctor_academic_qualifications');
    }
};
