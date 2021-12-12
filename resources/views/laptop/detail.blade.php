@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'DETAIL DATA Laptop')

@section('konten')

<a href="/laptop"> Kembali</a>

<br />
<br />

@foreach($laptop as $l)
<form action="/laptop/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="kodelaptop" value="{{ $l->kodelaptop }}"> <br />
    <div class="container">

        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="merklaptop" class="col-sm-2 control-label">Merk Laptop :</label>
                    <div class='col-lg-6 input-group' id='merklaptop'>
                        <label class="control-label">{{ $l->merklaptop }}</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="stocklaptop" class="col-sm-2 control-label">Stock Laptop :</label>
                    <div class='col-lg-6 input-group' id='stocklaptop'>
                        <label for="stocklaptop" class="control-label">{{ $l->stocklaptop }}</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-lg-9'>
                <div class="form-group">
                    <label for="tersedia" class="col-sm-2 control-label">Tersedia :</label>
                    <input type="radio" id="h" name="tersedia" value="Y" @if ($l->tersedia==='Y') checked="checked" @endif disabled>
                    <label for="y">YES</label><br>
                    <label for="tersedia" class="col-sm-2 control-label"></label>
                    <input type="radio" id="a" name="tersedia" value="N"  @if ($l->tersedia==='N') checked="checked" @endif disabled>
                    <label for="n">NO</label><br>
                </div>
            </div>
        </div>
    </div>
</form>
@endforeach
@endsection
