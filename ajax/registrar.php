<?php
require_once("../admin/_lib/config.php");
require_once("../admin/_lib/MysqliDb.php");
date_default_timezone_set('America/Santiago');

$db = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);

  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $fecha_nac = $_POST["fecha_nac"];
  if(isset($_POST["check_info"])){
  $check_info = $_POST["check_info"];
  }else{
  	$check_info = "";
  }

  
$err = 0;

if($nombre == ""){
	$err++;
}
if($email == ""){
	$err++;
}
if($fecha_nac == ""){
	$err++;
}

if($check_info == 'on'){
	$info = 1;
}else{
	$info = 0;
}

if($err == 0) {
	//ver que no está ya registrado con ese email
	$db->where ("email", $email);
	$inscrito = $db->getOne ("inscritos");
	if ($db->count == 0){
	
			$data = array(
				'nombre' => $nombre, 
				'email' => $email, 
				'fecha_nacimiento' => $fecha_nac, 
				'info' => $info, 
				'fecha_registro' => date("Y-m-d H:i:s")
			);

			$id = $db->insert ('inscritos', $data);
			if($id){
				//devolver OK
				echo "ok";
			}

	}else{
		echo "existe";
	}
}