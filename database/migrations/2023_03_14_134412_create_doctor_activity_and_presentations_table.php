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
        Schema::create('doctor_activity_and_presentations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('doctor_details_id');
            $table->string('research_name');
            $table->string('research_from');
            $table->string('research_to');
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
        Schema::dropIfExists('doctor_activity_and_presentations');
    }
};
