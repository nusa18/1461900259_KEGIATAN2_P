<!DOCTYPE html>
<html>
<head>
	<title>Ikhasul Nusa (1461900259)</title>
</head>
<body>
 
	<h2>Ikhlasul Nusa 1461900259</h2>
	
 
	<p><a href="like"> like</a></p>
	<p><a href="likejoin"> like & join</a></p>
	<h3>Data Anggota</h3>
 
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Telp</th>
			<th>Tanggal Pinjam</th>
			
		</tr>
		@foreach($anggota as $p)
		<tr>
			<td>{{ $p->anggota_nama }}</td>
			<td>{{ $p->anggota_alamat }}</td>
			<td>{{ $p->anggota_jk }}</td>
			<td>{{ $p->anggota_telp }}</td>
			<td>{{ $p->tgl_pinjam }}</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>