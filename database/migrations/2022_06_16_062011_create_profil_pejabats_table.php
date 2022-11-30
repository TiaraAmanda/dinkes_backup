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
        Schema::create('profil_pejabat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bidang_id');
            $table->foreignId('user_id');
            $table->foreignId('pejabat_id');
            $table->string('nama');
            $table->string('detail_jabatan');
            $table->string('image');
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
        Schema::dropIfExists('profil_pejabat');
    }
};
