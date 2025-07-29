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
        Schema::create('notulas', function (Blueprint $table) {
            $table->id();
            $table->string('rapat');
            $table->date('tanggal');
            $table->string('surat_undangan')->nullable();
            $table->time('waktu_mulai')->nullable();
            $table->time('waktu_selesai')->nullable();
            $table->text('acara')->nullable(); // bisa diisi JSON list atau teks bebas
            $table->string('jabatan_pimpinan')->nullable();
            $table->string('ketua')->nullable();
            $table->string('pencatat')->nullable();
            $table->text('peserta')->nullable();
            $table->text('pembahasan')->nullable();
            $table->text('hasil_diskusi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notulas');
    }
};
