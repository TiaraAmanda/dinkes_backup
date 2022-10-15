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
        Schema::create('public_corner', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik')->unique();
            $table->string('email');
            $table->string('notelp');
            $table->string('alamat');
            $table->string('jenis_kelamin');
            $table->string('pekerjaan');
            $table->text('pertanyaan');
            $table->text('jawaban')->nullable();
            $table->string('tampil')->nullable();
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
        Schema::dropIfExists('public_corner');
    }
};
