<h1>Edit Mahasiswa</h1>
<form action="/edit/{{ $mahasiswa->id }}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="nama_mhs" value="{{ $mahasiswa->nama_mhs }}"><br>
    <input type="text" name="alamat" value="{{ $mahasiswa->alamat }}"><br>
    <select name="jurusan_id">
        <option value="{{ $mahasiswa->jurusan_id }}">{{ $mahasiswa->jurusan_id }}</option>
        @foreach ($jurusan as $jrs)
            <option value="{{ $jrs->id }}">{{ $jrs->jurusan }}</option>
        @endforeach
    </select><br>
    <input type="submit" name="submit" value="save-edit">
</form>