
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
			<input type="hidden" name="controller" value="mahasiswa">
			<input type="hidden" name="action" value="addDataMahasiswa">
				<div class="form-group">
					<label class="col-sm-2 control-label">NIM</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nim" placeholder="Masukan NIM">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Nama</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Jurusan</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="jurusan" placeholder="Masukan Jurusan">
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Simpan</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>

