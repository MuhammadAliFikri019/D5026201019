@extends('layout.happy')
@section('title', 'Data Karyawan1')
@section('judulhalaman', 'DATA Karyawan1')

@section('konten')


<br />
<br />
<div class="container" align='center'>
    <p>Cari Data karyawan1 berdasarkan nama :</p>
    <form action="/karyawan1/cari" method="GET">
        <input class="form-control" type="text" name="cari" placeholder="Cari" value="{{ old('cari') }}">
        <input class="form-control btn-warning" type="submit" value="CARI">
        <br>
    </form>
</div>
<div style="overflow-x: auto;">
    <table border="1">
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Pangkat</th>
            <th>Gaji</th>
            <th>Opsi</th>
        </tr>
        @foreach($karyawan1 as $k)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $k->NIP }}</td>
            <td>{{ $k->Nama }} </td>
            <td>{{ $k->Pangkat }}</td>
            <td>Rp. {{ number_format($k->Gaji) }}</td>
            <td>
                <a href="/karyawan1/detail/{{ $k->NIP }}">View Detail</a>
                |
                <a href="/karyawan1/edit/{{ $k->NIP }}">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $karyawan1->links()  }}


</div>
@endsection
