@extends('layout.happy')
@section('title', 'Data Absen')
@section('judulhalaman', 'DETAIL DATA ABSEN')

@section('konten')

<a href="/absen"> Kembali</a>

<br />
<br />

@foreach($absen as $a)
<form action="/absen/update" method="post">
    <div class="container">

        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">Nama Pegawai :</label>
                    <div class='col-sm-4 input-group date' id='nama'>
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
                    <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
                    <div class='col-sm-4 input-group date' id='dtpickerdemo'>
                        <label class="control-label">{{ $a->Tanggal }}</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Status :</label>
                    <input type="radio" id="h" name="status" value="H" @if ($a->Status==='H') checked="checked" @endif disabled>
                    <label for="h">HADIR</label><br>
                    <label class="col-sm-2 control-label"></label>
                    <input type="radio" id="a" name="status" value="A"  @if ($a->Status==='A') checked="checked" @endif disabled>
                    <label for="a">TIDAK HADIR</label><br>
                </div>
            </div>
        </div>
    </div>
</form>
@endforeach
@endsection
