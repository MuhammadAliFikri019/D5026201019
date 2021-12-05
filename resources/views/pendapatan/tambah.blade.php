@extends('layout.happy')
@section('title', 'Data Pendapatan')
@section('judulhalaman', 'TAMBAH DATA PENDAPATAN')

@section('konten')
<a href="/pendapatan"> Kembali</a>

<br />
<br />

<form action="/pendapatan/store" method="post">
    {{ csrf_field() }}
    <div class="container">

        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">Nama Pegawai :</label>
                    <div class='col-lg-6 input-group' id='nama'>
                        <select class="form-control" name="idpegawai">
                            @foreach($pegawai as $p )
                            <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
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
                        <select class="form-control" name="bulan">
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="dtpickerdemo" class="col-sm-2 control-label">Tahun :</label>
                    <div class='col-lg-6 input-group date' id='dtpickerdemo'>
                        <input type='text' class="form-control" name="tahun" required="required" />
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
                        <input class="form-control" type="number" name="gaji">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="gaji" class="col-sm-2 control-label">Tunjangan :</label>
                    <div class='col-lg-6 input-group' id='tunjangan' input type="number" name="tunjangan"
                        required="required">
                        <input class="form-control" type="number" name="tunjangan" required="required">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="submit" value="Simpan Data">
</form>

@endsection
