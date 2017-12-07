
<!DOCTYPE HTML>
<html>
<head>
	<title>crud mahasiswa</title>

</head>
<body>
	<h1 align="center">CRUD MAHASISWA</h1>
	<br><br>
	<!-- button diarahkan ke link dengan param controller=mahasiswa dan action=tampilAddMahasiswa -->
	<a href="?controller=mahasiswa&action=tampilAddMahasiswa"><button type="button" class="btn btn-info">Tambah Data</button></a>
	<br><br>
	<div class="container">
		<table class="table table-hover">
			<th>No</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>action</th>
			<?php $i=1; ?>
			<?php foreach ($posts as $post) { /*Mengambil seluruh data dari variabel 
				posts yang ditampung ke variabel post*/ ?>
			
			<tr>

				<td><?php echo $i; ?></td> <!-- mencetak data $post->nim dll berasal dari variabel yang berada di m_mahasiswa -->
				<td><?php echo $post->nim; ?></td>
				<td><?php echo $post->nama; ?></td>
				<td><?php echo $post->jurusan;  ?></td>
				<td>
					<a href="?controller=mahasiswa&action=editMahasiswa&id=<?php echo $post->id ?>"><span class="glyphicon glyphicon-edit"></span></a>
					<a href="?controller=mahasiswa&action=deleteMahasiswa&id=<?php echo $post->id ?>"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
				</tr> <?php $i++; } ?>
		</table>
	</div>
	
</body>
</html>

