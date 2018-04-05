<?php
error_reporting(E_ALL & ~E_NOTICE || ~E_WARNING);

session_start();
require_once("_lib/config.php");
require_once("_lib/MysqliDb.php");

$db = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);

if($_SESSION['ccid']){

}else{ 
 	header("Location:login.php");
}


$db2 = new mysqli(DBHOST, DBUSER, DBPASS);
mysqli_select_db($db2, DBNAME); 



$sql = "SELECT * from inscritos"; 
$setRec = mysqli_query($db2, $sql); 
$columnHeader = ''; 
$columnHeader = "Id" . "\t" . "Nombre" . "\t" . "Email" . "\t"; 
$columnHeader.= "FechaNacimiento" . "\t" . "Info" . "\t" . "FechaRegistro" . "\t"; 

//`id`, `nombre`, `email`, `fecha_nacimiento`, `info`, `fecha_registro`

$setData = ''; 
while ($rec = mysqli_fetch_row($setRec)) { 
$rowData = ''; 
foreach ($rec as $value) { 
$value = '"' . $value . '"' . "\t"; 
$rowData .= $value; 
} 
$setData .= trim($rowData) . "\n"; 
} 
header("Content-type: application/octet-stream"); 
header("Content-Disposition: attachment; filename=inscritos.xls"); 
header("Pragma: no-cache"); 
header("Expires: 0"); 
echo ucwords($columnHeader) . "\n" . $setData . "\n"; 
?>