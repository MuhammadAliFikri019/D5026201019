@extends('layout.happy')
@section('title', 'Data Laptop')
@section('judulhalaman', 'TAMBAH DATA Laptop')

@section('konten')

<a href="/laptop"> Kembali</a>

<br />
<br />

<form action="/laptop/store" method="post">
    {{ csrf_field() }}
    <div class="container">
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="merklaptop" class="col-sm-2 control-label">Merk Laptop :</label>
                    <div class='col-lg-6 input-group' id='merklaptop' input type="text" name="merklaptop" required="required">
                        <input class="form-control" type="text" name="merklaptop" required="required">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="stocklaptop" class="col-sm-2 control-label">Stock Laptop :</label>
                    <div class='col-lg-6 input-group' id='stocklaptop' input type="number" name="stocklaptop" required="required">
                        <input class="form-control" type="number" name="stocklaptop" required="required">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="tersedia" class="col-sm-2 control-label">Tersedia :</label>
                    <input type="radio" id="y" name="tersedia" value="Y">
                    <label for="h">YES</label><br>
                    <label for="tersedia" class="col-sm-2 control-label"></label>
                    <input type="radio" id="n" name="tersedia" value="N" checked="checked">
                    <label for="a">NO</label><br>
                </div>
            </div>
        </div>
    </div>
    <input type="submit" value="Simpan Data">
</form>
@endsection
