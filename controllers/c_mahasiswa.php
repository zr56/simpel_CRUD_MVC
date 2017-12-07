<?php
Class MahasiswaController{

	public function tampilAddMahasiswa(){
		require_once("views/pages/addMahasiswa.php");
	}
	public function addDataMahasiswa(){
		$posts = Mahasiswa::addDataMahasiswa($_GET["nim"],$_GET["nama"],$_GET["jurusan"]);
		header("location:index.php?controller=home&action=home");

	}
	public function showAllMahasiswa(){
		$posts=Mahasiswa::showAllMahasiswa();
		require_once("views/pages/home.php");
	}
	public function editMahasiswa(){
		$posts=Mahasiswa::editMahasiswa($_GET["id"]);
		require_once("views/pages/editMahasiswa.php");
	}
	public function editDataMahasiswa(){
		$posts=Mahasiswa::editDataMahasiswa($_GET["nama"],$_GET["nim"],$_GET["jurusan"],$_GET["id"]);
		header("location:index.php?controller=home&action=home");
	}
	public function deleteMahasiswa(){
		$posts=Mahasiswa::deleteMahasiswa($_GET["id"]);
		header("location:index.php?controller=home&action=home");
	}



}

?>
