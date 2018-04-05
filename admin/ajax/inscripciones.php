<?php
require_once("../_lib/config.php");
require_once("../_lib/MysqliDb.php");
require_once("pagination.class.php");

$db = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);

$perPage = new PerPage();
$id_evento = "";

	$paginationlink = "ajax/inscripciones.php?page=";	
	$pagination_setting = $_GET["pagination_setting"];
					
	$page = 1;
	if(!empty($_GET["page"])) {
	$page = $_GET["page"];
	}



	$start = ($page-1)*$perPage->perpage;
	if($start < 0) $start = 0;



	$sql = "SELECT * from inscritos ORDER BY fecha_registro DESC ";	

	$query =  $sql . " limit " . $start . "," . $perPage->perpage; 
	// echo $query;

	$dec = $db->rawQuery($query);

	if(empty($_GET["rowcount"])) {


	$cnt = $db->getValue ("inscritos", "count(id)");

	$_GET["rowcount"] = $cnt;
	}
	if($pagination_setting == "prev-next") {
		$perpageresult = $perPage->getPrevNext($_GET["rowcount"], $paginationlink,$pagination_setting);	
	} else {
		$perpageresult = $perPage->getAllPageLinks($_GET["rowcount"], $paginationlink,$pagination_setting);	
	}



	$output = '';
	foreach($dec as $k=>$v) {
	 $output .= '<tr>';
	 $output .= '<td>' . $dec[$k]["id"] . '</td>';
	 $output .= '<td>' . $dec[$k]["nombre"] . '</td>';
	 $output .= '<td>' . $dec[$k]["email"] . '</td>';
	 $output .= '<td>' . $dec[$k]["fecha_nacimiento"] . '</td>';

	 if($dec[$k]["info"] == 1){
	 	 $output .= '<td>SI</td>';
	 }else{
	 	 $output .= '<td>NO</td>';
	 }
	
	 $output .= '<td>' . $dec[$k]["fecha_registro"] . '</td>';

	 $output .= '</tr>';
	}
	if(!empty($perpageresult)) {
	$htmlPaginador = '<div id="pagination">' . $perpageresult . '</div>';
	}else{
		$htmlPaginador = "";
	}
	$array = array('datos' => $output, 'paginador' => $htmlPaginador);
	echo json_encode($array);