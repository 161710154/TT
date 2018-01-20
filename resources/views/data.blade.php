@extends('layouts.3')
@extends('layouts.app')
@section('konten')

<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
</head>
<body>
<div class="jumbotron">
<center><h1>Data Table</h1></center>
<p></p>
</div>
<div class="container">
<table border="2" class="tables">
	<th>NIS</th>
	<th>Nama</th>
	<th>Tempat Lahir</th>
	<th>Tanggal Lahir</th>
	<th>Alamat</th>
	<th>Cita-cita</th>
	<th>Hobi</th>
	@foreach ($c as $gg)
	<tr>
	<td>{{$gg -> NIS}}</td>
	<td>{{$gg -> Nama_Siswa}}</td>
	<td>{{$gg -> Tempat_Lahir}}</td>
	<td>{{$gg -> Tanggal_Lahir}}</td>
	<td>{{$gg -> Alamat}}</td>
	<td>{{$gg -> Cita_Cita}}</td>
	<td>{{$gg -> Hobi}}</td>
	@endforeach
	</tr>
	</table>
	<div class="collapse navbar-collapse">
	<ul class="nav navbar-nav">
	<li><center><a href="1" button type="button" class="btn btn-lg btn-primary">Kembali ke home</button></a></li>
	</ul>
	</div>
</body>
</html>
@endsection