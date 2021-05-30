<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('patient_id');
            $table->date('date');
            $table->string('time');
            $table->string('phone_number');
            $table->text('message')->nullable();
            $table->enum('status', ['accepted', 'denied', 'processed'])->default('processed');
            $table->timestamps();

            $table->foreign('doctor_id')->on('doctors')->references('id');
            $table->foreign('patient_id')->on('patients')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
