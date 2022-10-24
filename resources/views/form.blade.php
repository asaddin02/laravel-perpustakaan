<a href="/create">Tambah Data</a>
    <table border="1">
        <tr>
            <th>Siswa</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        @foreach ($siswa as $sws)
        <tr>
            <td>{{ $mhs->nama}}</td>
            <td>{{ $mhs->kelas_id }}</td>
            <td>{{ $mhs->alamat }}</td>
            <td>
                <a href="/edit/{{ $siswa->id }}">Ubah</a>
                <form action="/form/{{ $siswa->id }}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
    </table>