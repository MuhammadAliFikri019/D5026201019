@extends('layout.happy')
@section('title', 'Data Karyawan1')
@section('judulhalaman', 'DETAIL DATA Karyawan1')

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
                        <label class="control-label">{{ $k->NIP }}</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">Nama :</label>
                    <div class='col-lg-6 input-group' id='merklaptop'>
                        <label class="control-label">{{ $k->Nama }}</label>
                    </div>
                </div>
            </div>
        </div><div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="pangkat" class="col-sm-2 control-label">Pangkat :</label>
                    <div class='col-lg-6 input-group' id='pangkat'>
                        <label class="control-label">{{ $k->Pangkat }}</label>
                    </div>
                </div>
            </div>
        </div><div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="gaji" class="col-sm-2 control-label">Gaji :</label>
                    <div class='col-lg-6 input-group' id='gaji'>
                        <label class="control-label">Rp. {{ number_format($k->Gaji) }}</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endforeach
@endsection
