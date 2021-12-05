@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'EDIT DATA Pegawai')

@section('konten')

<a href="/pegawai"> Kembali</a>

<br />
<br />

@foreach($pegawai as $p)
<form action="/pegawai/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />
    <div class="container">

        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">Nama :</label>
                    <div class='col-lg-6 input-group' id='nama'>
                        <input class="form-control" type="text" name="nama" required="required" value="{{ $p->pegawai_nama }} ">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="jabatan" class="col-sm-2 control-label">Jabatan :</label>
                    <div class='col-lg-6 input-group' id='jabatan' input type="text">
                        <input class="form-control" type="text" name="jabatan" required="required" value="{{ $p->pegawai_jabatan }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="umur" class="col-sm-2 control-label">Umur :</label>
                    <div class='col-lg-6 input-group' id='umur' input type="number">
                        <input class="form-control" type="number" name="umur" required="required" value="{{ $p->pegawai_umur }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="jabatan" class="col-sm-2 control-label">Alamat :</label>
                    <div class='col-lg-6 input-group' id='alamat' input type="text">
                        <input class="form-control" type="text" name="alamat" required="required" value="{{ $p->pegawai_alamat }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="submit" value="Simpan Data">
</form>
@endforeach
@endsection
