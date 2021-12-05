@extends('layout.happy')
@section('title', 'Data Pendapatan')
@section('judulhalaman', 'EDIT DATA PENDAPATAN')

@section('konten')

<a href="/pendapatan"> Kembali</a>

<br />
<h3>{{ $status }}</h3>
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
                                @endif> {{ $p->pegawai_nama }}</option>
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
                        <input class="form-control" type="number" name="Bulan" value="{{ $a->Bulan }}">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="dtpickerdemo" class="col-sm-2 control-label">Tahun :</label>
                    <div class='col-lg-6 input-group date' id='dtpickerdemo'>
                        <input type='text' class="form-control" name="tahun" required="required"
                            value="{{ $a->Tahun }}" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(function() {
                    $('#dtpickerdemo').datetimepicker({
                        format: "YYYY",
                        "defaultDate": new Date(),
                        locale : "id"
                    });
                });
            </script>
        </div>
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="gaji" class="col-sm-2 control-label">Gaji :</label>
                    <div class='col-lg-6 input-group' id='gaji'>
                        <input class="form-control" type="number" name="gaji" value="{{ $a->Gaji }}">
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
                        <input class="form-control" type="number" name="tunjangan" required="required" value="{{ $a->Tunjangan }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="submit" value="Simpan Data">
</form>
@endforeach

@endsection
