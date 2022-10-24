<h1>Create Mahasiswa</h1>
<form action="/store" method="POST">
    @csrf
    <input type="text" name="nama_mhs" placeholder="Nama"><br>
    <input type="text" name="alamat" placeholder="Alamat"><br>
    <select name="jurusan_id">
        @foreach ($kelas as $kls)
            <option value="{{ $kls->id }}">{{ $kls->kelas }}</option>
        @endforeach
    </select><br>
    <input type="submit" name="submit" value="save">
</form>