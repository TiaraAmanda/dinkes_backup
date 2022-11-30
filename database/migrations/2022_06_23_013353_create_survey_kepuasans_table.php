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
        Schema::create('survey_kepuasan', function (Blueprint $table) {
            $table->id();
            $table->string('kategori_survey');
            $table->integer('umur');
            $table->string('jenis_kelamin');
            $table->string('pertanyaan2');
            $table->string('pertanyaan3');
            $table->string('pertanyaan4');
            $table->string('pertanyaan5');
            $table->string('pertanyaan6');
            $table->string('pertanyaan7');
            $table->string('pertanyaan8');
            $table->string('pertanyaan9');
            $table->string('pertanyaan10');
            $table->text('kritiksaran');
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
        Schema::dropIfExists('survey_kepuasan');
    }
};
