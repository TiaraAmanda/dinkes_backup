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
        Schema::create('survey_puskesmas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('umur');
            $table->date('tanggal');
            $table->string('jenis_kelamin');
            $table->string('instansi');
            $table->string('jabatan');
            $table->string('email');
            $table->string('nohp');
            $table->string('kategori_survey');
            $table->string('pertanyaan1');
            $table->string('pertanyaan2');
            $table->string('pertanyaan3');
            $table->string('pertanyaan4');
            $table->string('pertanyaan5');
            $table->string('pertanyaan7');
            $table->string('pertanyaan8');
            $table->string('pertanyaan9');
            $table->string('pertanyaan10');
            $table->string('pertanyaan11');
            $table->text('masukan');
            $table->text('saranpenyempurnaan');
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
        Schema::dropIfExists('survey_puskemas');
    }
};
