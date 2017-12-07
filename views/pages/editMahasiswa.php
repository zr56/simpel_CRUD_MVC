
<!DOCTYPE HTML>
<html>
<head>
	<title>crud mahasiswa</title>

</head>
<body>
<h1 align="center">CRUD MAHASISWA</h1>
<br><br>
	<div class="container">
		<div class="col-md-6">
			<form class="form-horizontal" method="GET">
			<?php foreach ($posts as $post){

				 ?>
				
			
			<input type="hidden" name="controller" value="mahasiswa">
			<input type="hidden" name="action" value="editDataMahasiswa">
			<input type="hidden" name="id" value="<?php echo $post->id; ?>">
				<div class="form-group">
					<label class="col-sm-2 control-label">NIM</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nim" placeholder="Masukan NIM" value="<?php echo $post->nim ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Nama</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nama" placeholder="Masukan Nama" value="<?php echo $post->nama ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Jurusan</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="jurusan" placeholder="Masukan Jurusan" value="<?php echo $post->jurusan ?>">
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Simpan</button>
					</div>
				</div>
				<?php } ?>
			</form>
		</div>
	</div>
</body>
</html>

