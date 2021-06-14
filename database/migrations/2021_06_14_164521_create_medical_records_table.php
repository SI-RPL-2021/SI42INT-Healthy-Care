<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->date('date');
            $table->integer('usia');
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->text('riwayat_alergi');
            $table->text('riwayat_pengobatan');
            $table->text('penyakit');
            $table->text('kondisi_umum');
            $table->timestamps();

            $table->foreign('patient_id')->on('patients')->references('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medical_records');
    }
}
