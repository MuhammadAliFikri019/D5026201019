@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'TAMBAH DATA Pegawai')

@section('konten')

<a href="/pegawai"> Kembali</a>

<br />
<br />

<form action="/pegawai/store" method="post">
    {{ csrf_field() }}
    <div class="container">
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">Nama :</label>
                    <div class='col-lg-6 input-group' id='nama' input type="text" name="nama" required="required">
                        <input class="form-control" type="text" name="nama" required="required">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="jabatan" class="col-sm-2 control-label">Jabatan :</label>
                    <div class='col-lg-6 input-group' id='jabatan' input type="text" name="jabatan" required="required">
                        <input class="form-control" type="text" name="jabatan" required="required">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="umur" class="col-sm-2 control-label">Umur :</label>
                    <div class='col-lg-6 input-group' id='umur' input type="number" name="umur" required="required">
                        <input class="form-control" type="number" name="umur" required="required">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="jabatan" class="col-sm-2 control-label">Alamat :</label>
                    <div class='col-lg-6 input-group' id='alamat' input type="text" name="alamat" required="required">
                        <input class="form-control" type="text" name="alamat" required="required">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="submit" value="Simpan Data">
</form>
@endsection
