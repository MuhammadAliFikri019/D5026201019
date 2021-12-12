@extends('layout.happy')
@section('title', 'Data Absen')
@section('judulhalaman', 'DATA Absen')

@section('konten')

<a href="/absen/tambah"> + Tambah Absen Baru</a>

<br />
<br />
<div style="overflow-x: auto;">
    <table border="1">
        <tr>
            <th>No</th>
            <th>NamaPegawai</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Opsi</th>
        </tr>
        @foreach($absen as $a)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $a->pegawai_nama }}</td>
            <td>{{ $a->Tanggal }}</td>
            <td>{{ $a->Status }}</td>
            <td>
                <a href="/absen/detail/{{ $a->ID }}">View Detail</a>
                |
                <a href="/absen/edit/{{ $a->ID}}">Edit</a>
                |
                <a href="/absen/hapus/{{ $a->ID}}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $absen->links() }}

</div>

@endsection
