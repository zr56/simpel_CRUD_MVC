<?php
class Mahasiswa
{

	public $id;
	public $nim;
	public $nama;
	public $jurusan;

	function __construct($id,$nim,$nama,$jurusan){
		$this->id=$id;
		$this->nim=$nim;
		$this->nama=$nama;
		$this->jurusan=$jurusan;
	}

	public static function addDataMahasiswa($nim,$nama,$jurusan){
		$db = DB::getInstance();

		$req = $db->query("INSERT INTO mahasiswa (id, nim, nama, jurusan)
			VALUES (NULL, '".$nim."', '".$nama."', '".$jurusan."');");

		return $req;
	}

	public static function showAllMahasiswa(){
		$list=[];
		$db = DB::getInstance();
		$req = $db->query("SELECT * FROM mahasiswa order by nim asc");
		foreach ($req->fetchAll() as $post) {
			$list[] = new Mahasiswa($post['id'],$post['nim'],$post['nama'],$post['jurusan']
				);
		}


		return $list;
	}
	public static function editMahasiswa($id){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM mahasiswa where id=$id");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Mahasiswa($post['id'],$post['nim'],$post['nama'],$post['jurusan']
				);
		}


		return $list;
	}

	public static function editDataMahasiswa($nama,$nim,$jurusan,$id){
		$db = DB::getInstance();

		$req = $db->query("UPDATE mahasiswa set nama='$nama', nim='$nim', jurusan='$jurusan'
			where id='$id'
			");

		return $req;
	}
	public static function deleteMahasiswa($id){
		$db = DB::getInstance();

		$req = $db->query("DELETE from mahasiswa where id=$id
			");

		return $req;
	}

}

?>
