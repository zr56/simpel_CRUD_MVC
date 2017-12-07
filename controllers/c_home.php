<?php
Class HomeController{

	public function home(){
		$posts=Mahasiswa::showAllMahasiswa();
		require_once("views/pages/home.php");

	}
}

?>
