<?php
     namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Notula extends Model
    {
        /** @use HasFactory<\Database\Factories\NotulaFactory> */
        use HasFactory;

        protected $fillable = [
        'rapat', 'tanggal', 'waktu_mulai', 'waktu_selesai',
        'surat_undangan', 'jabatan_pimpinan',
        'ketua', 'pencatat', 'peserta', 'acara', 'pembahasan', 'hasil_diskusi'
    ];

    }
