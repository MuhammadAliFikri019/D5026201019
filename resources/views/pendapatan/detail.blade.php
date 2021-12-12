@extends('layout.happy')
@section('title', 'Data Pendapatan')
@section('judulhalaman', 'DETAIL DATA PENDAPATAN')

@section('konten')

<a href="/pendapatan"> Kembali</a>

<br />
<br />

@foreach($pendapatan as $a)
<form action="/pendapatan/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $a->ID }}">
    <div class="container">

        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">Nama Pegawai :</label>
                    <div class='col-lg-6 input-group' id='nama'>
                        <select class="form-control" name="idpegawai">
                            @foreach($pegawai as $p )
                            <option value="{{ $p->pegawai_id }}" @if($p->pegawai_id===$a->IDPegawai) selected="selected"
                                @endif disabled> {{ $p->pegawai_nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="bulan" class="col-sm-2 control-label">Bulan :</label>
                    <div class='col-lg-6 input-group' id='bulan'>
                        <label class="control-label">{{ $a->Bulan }}</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="dtpickerdemo" class="col-sm-2 control-label">Tahun :</label>
                    <div class='col-sm-4 input-group date' id='dtpickerdemo'>
                        <label class="control-label">{{ $a->Tahun }}</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="gaji" class="col-sm-2 control-label">Gaji :</label>
                    <div class='col-lg-6 input-group' id='gaji'>
                        <label for="gaji" class="control-label">{{ $a->Gaji }}</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="tunjangan" class="col-sm-2 control-label">Tunjangan :</label>
                    <div class='col-lg-6 input-group' id='tunjangan' input type="number" name="tunjangan"
                        required="required">
                        <label class="control-label">{{ $a->Tunjangan }}</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endforeach
@endsection
