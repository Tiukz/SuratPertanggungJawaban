
<div style="max-width: 800px; margin: auto; font-family: Arial, sans-serif;">
    <img src="{{ asset('images/Picture1-spd.png') }}" alt="Logo">
    <h2 style="text-align: center; margin-bottom: 10px;">NOTULA RAPAT</h2>
    
    @php
        use Carbon\Carbon;
        $tanggal = Carbon::parse($notula->tanggal);
        $hari = $tanggal->translatedFormat('l'); // Kamis
        $tgl = $tanggal->translatedFormat('d F Y'); // 18 Juli 2025
    @endphp

    <p><strong>Rapat:</strong> {{ $notula->rapat }}</p>
    <p><strong>Hari, Tanggal:</strong> {{ $hari }}, {{ $tgl }}</p>
    <p><strong>Waktu:</strong> {{ $notula->waktu_mulai }} - {{ $notula->waktu_selesai }}</p>
    <p><strong>Surat Undangan:</strong> {{ $notula->surat_undangan }}</p>
    <p><strong>Ketua:</strong> {{ $notula->ketua }}</p>
    <p><strong>Pencatat:</strong> {{ $notula->pencatat }}</p>
    <p><strong>Jabatan Pimpinan:</strong> {{ $notula->jabatan_pimpinan }}</p>

    <hr>

    <h4>Peserta Rapat</h4>
    <p>{!! nl2br(e($notula->peserta)) !!}</p>

    <h4>Acara</h4>
    <p>{!! nl2br(e($notula->acara)) !!}</p>

    <h4>Pembahasan</h4>
    <p>{!! nl2br(e($notula->pembahasan)) !!}</p>

    <h4>Hasil Diskusi</h4>
    <p>{!! nl2br(e($notula->hasil_diskusi)) !!}</p>

    <br><br>
    <div style="text-align: right;">
        <p>{{ $notula->jabatan_pimpinan ?? 'Pimpinan Rapat' }}</p>
        <br><br>
        <p><strong>{{ $notula->ketua }}</strong></p>
    </div>
</div>
<br>
<a href="{{ route('notulas.pdf', $notula->id) }}" class="btn btn-primary" target="_blank">Unduh PDF</a>

