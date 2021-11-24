<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pendapatan</h3>

	<a href="/pendapatan"> Kembali</a>

	<br/>
	<br/>

	@foreach($pendapatan as $p)
	<form action="/pendapatan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->ID }}"> <br/>
		IDPegawai <input type="number" required="required" name="idpegawai" value="{{ $p->IDPegawai }}"> <br/>
		Bulan <input type="number" required="required" name="bulan" value="{{ $p->Bulan }}"> <br/>
		Tahun <input type="text" required="required" name="tahun" value="{{ $p->Tahun }}"> <br/>
        Gaji <input type="number" required="required" name="gaji" value="{{ $p->Gaji }}"> <br/>
        Tunjangan <input type="number" required="required" name="tunjangan" value="{{ $p->Tunjangan }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
