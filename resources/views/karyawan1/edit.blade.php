@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'EDIT DATA Laptop')

@section('konten')

<a href="/karyawan1"> Kembali</a>

<br />
<br />

@foreach($karyawan1 as $k)
<form action="/karyawan1/update" method="post">
    {{ csrf_field() }}
    <div class="container">

        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="nip" class="col-sm-2 control-label">NIP :</label>
                    <div class='col-lg-6 input-group' id='nip'>
                        <input class="form-control" type="text" name="nip" required="required" value="{{ $k->NIP }} ">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">Nama :</label>
                    <div class='col-lg-6 input-group' id='nama'>
                        <input class="form-control" type="text" name="nama" required="required" value="{{ $k->Nama }} ">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="pangkat" class="col-sm-2 control-label">Pangkat :</label>
                    <div class='col-lg-6 input-group' id='pangkat'>
                        <input class="form-control" type="text" name="pangkat" required="required" value="{{ $k->Pangkat }} ">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="gaji" class="col-sm-2 control-label">Gaji :</label>
                    <div class='col-lg-6 input-group' id='gaji'>
                        <input class="form-control" type="text" name="gaji" required="required" value="Rp. {{ number_format($k->Gaji) }} ">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="submit" value="Simpan Data">
</form>
@endforeach
@endsection
