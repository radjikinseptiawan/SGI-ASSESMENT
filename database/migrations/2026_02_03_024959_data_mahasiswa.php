<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    { 
        Schema::create("Mahasiswa",function(Blueprint $table){
            $table->id("mahasiswa_id");
            $table->string("nomor_induk_mahasiswa");
            $table->string("nama_lengkap");
            $table->string("tempat_tanggal_lahir");
            $table->string("domisili");
            $table->string("jurusan");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("Mahasiswa");
    }
};
