<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kegiatan');
            $table->string('poster_postingan');
            $table->Integer('jenis_kegiatan');
            // 1= Beasiswa, 2=Lomba, 3=Event, 4=Volunteer
            $table->string('tanggal');
            $table->text('lokasi');
            $table->string('caption');
            $table->string('ig_pelaksana');
            $table->string('email_pelaksana');
            $table->string('link_pendaftaran');
            $table->string('benefit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatans');
    }
};