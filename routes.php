<?php
function call($controller, $action){
	require_once('controllers/c_'.$controller.'.php');

	switch ($controller) {


		case 'home':
		$controller=new HomeController();
		require_once('models/m_home.php');
		require_once('models/m_mahasiswa.php');
		break;

		case 'mahasiswa':
		$controller=new MahasiswaController();
		require_once('models/m_mahasiswa.php');
		break;




	}
	$controller->{ $action }();
}

$controllers = array(
	'home'=>['home'],
	'mahasiswa'=>['tampilAddMahasiswa','addDataMahasiswa','showAllMahasiswa',"editMahasiswa","editDataMahasiswa",
	"deleteMahasiswa"],

	);


if (array_key_exists($controller, $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller,$action);
	} else {
		call($controller,'error');
	}

} else {
	call($controller,'error');
}

?>
