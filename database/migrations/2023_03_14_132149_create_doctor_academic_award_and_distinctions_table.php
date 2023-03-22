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
        Schema::create('doctor_academic_award_and_distinctions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('doctor_details_id');
            $table->string('award_name');
            $table->string('award_date');
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
        Schema::dropIfExists('doctor_academic_award_and_distinctions');
    }
};
