@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'DATA Pegawai')

@section('konten')

<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

<br />
<br />
<div class="container" align='center'>
    <p>Cari Data Pegawai berdasarkan nama atau alamat :</p>
    <form action="/pegawai/cari" method="GET">
        <input class="form-control" type="text" name="cari" placeholder="Cari" value="{{ old('cari') }}">
        <input class="form-control btn-warning" type="submit" value="CARI">
        <br>
    </form>
</div>
<div style="overflow-x: auto;">
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach($pegawai as $p)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $p->pegawai_nama }}</td>
            <td>{{ $p->pegawai_alamat }}</td>
            <td>
                <a href="/pegawai/detail/{{ $p->pegawai_id }}">View Detail</a>
                |
                <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                |
                <a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $pegawai->links()  }}


</div>
@endsection
