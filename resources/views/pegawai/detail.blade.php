@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'DETAIL DATA PEGAWAI')

@section('konten')

<a href="/pegawai"> Kembali</a>

<br />
<br />

@foreach($pegawai as $p)
    <div class="container">

        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">Nama :</label>
                    <div class='col-lg-6 input-group' id='nama'>
                        <label class="control-label">{{ $p->pegawai_nama }}</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="jabatan" class="col-sm-2 control-label">Jabatan :</label>
                    <div class='col-lg-6 input-group' id='jabatan' input type="text">
                        <label class="control-label">{{ $p->pegawai_jabatan }}</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="umur" class="col-sm-2 control-label">Umur :</label>
                    <div class='col-lg-6 input-group' id='umur' input type="number">
                        <label class="control-label">{{ $p->pegawai_umur }}</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="jabatan" class="col-sm-2 control-label">Alamat :</label>
                    <div class='col-lg-6 input-group' id='alamat' input type="text">
                        <label class="control-label">{{ $p->pegawai_alamat }}</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection
