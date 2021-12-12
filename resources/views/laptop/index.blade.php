@extends('layout.happy')
@section('title', 'Data Laptop')
@section('judulhalaman', 'DATA Laptop')

@section('konten')

<a href="/laptop/tambah"> + Tambah Laptop Baru</a>

<br />
<br />
<div class="container" align='center'>
    <p>Cari Data Laptop berdasarkan merk :</p>
    <form action="/laptop/cari" method="GET">
        <input class="form-control" type="text" name="cari" placeholder="Cari" value="{{ old('cari') }}">
        <input class="form-control btn-warning" type="submit" value="CARI">
        <br>
    </form>
</div>
<div style="overflow-x: auto;">
    <table border="1">
        <tr>
            <th>No</th>
            <th>Merk Laptop</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach($laptop as $l)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $l->merklaptop }}</td>
            <td>{{ $l->tersedia }}</td>
            <td>
                <a href="/laptop/detail/{{ $l->kodelaptop }}">View Detail</a>
                |
                <a href="/laptop/edit/{{ $l->kodelaptop }}">Edit</a>
                |
                <a href="/laptop/hapus/{{ $l->kodelaptop }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $laptop->links()  }}


</div>
@endsection
