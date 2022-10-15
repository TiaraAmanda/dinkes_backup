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
        Schema::create('spm_file', function (Blueprint $table) {
            $table->id();
            $table->foreignID('kd_kabkota');
            $table->string('nama_file');
            $table->integer('tahun');
            $table->string('file_spm');
            $table->integer('tribulan');
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
        Schema::dropIfExists('spm_file');
    }
};
