@extends('layout.happy')
@section('title', 'Data Pendapatan')
@section('judulhalaman', 'DATA PENDAPATAN')

@section('konten')

<a href="/pendapatan/tambah"> + Tambah Pendapatan Baru</a>

<br />
<br />
<div style="overflow-x: auto;">
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Pegawai</th>
            <th>Gaji</th>
            <th>Tunjangan</th>
            <th>Opsi</th>
        </tr>
        @foreach($pendapatan as $p)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $p->pegawai_nama }}</td>
            <td>{{ $p->Gaji }}</td>
            <td>{{ $p->Tunjangan }}</td>
            <td>
                <a href="/pendapatan/detail/{{ $p->ID }}">Detail</a>
                |
                <a href="/pendapatan/edit/{{ $p->ID }}">Edit</a>
                |
                <a href="/pendapatan/hapus/{{ $p->ID }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $pendapatan->links()  }}
</div>

@endsection
