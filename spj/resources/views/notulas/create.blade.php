
<h1>Form Notula Rapat</h1>
<form action="{{ route('notulas.store') }}" method="POST">
    @csrf

    <label>Nama Rapat</label>
    <input type="text" name="rapat" required><br>

    <label>Tanggal</label>
    <input type="date" name="tanggal" required><br>

    <label>Waktu Mulai</label>
    <input type="time" name="waktu_mulai"><br>

    <label>Waktu Selesai</label>
    <input type="time" name="waktu_selesai"><br>

    <label>Surat Undangan</label>
    <input type="text" name="surat_undangan"><br>

    <label>Jabatan Pimpinan</label>
    <input type="text" name="jabatan_pimpinan"><br>

    <label>Ketua</label>
    <input type="text" name="ketua"><br>

    <label>Pencatat</label>
    <input type="text" name="pencatat"><br>

    <label>Peserta Rapat</label>
    <textarea name="peserta"></textarea><br>

    <label>Acara</label>
    <textarea name="acara"></textarea><br>

    <label>Pembahasan</label>
    <textarea name="pembahasan"></textarea><br>

    <label>Hasil Diskusi</label>
    <textarea name="hasil_diskusi"></textarea><br>

    <button type="submit">Simpan Notula</button>
</form>

