<?php

$servername = "ns5928.banahosting.com";
$database = "sashsgur_luzmamusic";
$username = "sashsgur_javier";
$password = "Jasuare01.";


// Create connection

$conn_Modulo = mysqli_connect($servername, $username, $password, $database);


mysqli_set_charset('utf8', $link);


// Check connection
if (!$conn_Modulo) {
    die("Connection failed: " . mysqli_connect_error());
}

// echo "Connected successfully";


// Establecer contacto con la base de datos a consultar

mysqli_select_db($conn_Modulo,$database) or die('No se pudo seleccionar la base de datos');

// echo "Llamado a la base de datos exitosa";



// **************************************************************************
// **************************************************************************
// **************************************************************************



// Definir variables que serán parte de la consulta a realizar posteriormente:

$query_Modulo = "SELECT  * FROM  Modulos WHERE Curso='$Curso' AND Numero_Modulo=$Modulo";

// Validar si la consulta a la base de datos es éxitosa:

$result_Modulo = mysqli_query($conn_Modulo,$query_Modulo) or die('Consulta fallida Estrategia: ' . mysql_error());


	while ($row_Modulo=mysqli_fetch_array($result_Modulo,MYSQLI_ASSOC)) {

	header('Content-Type: text/html; charset=utf-8');
	ini_set('default_charset', 'utf-8');

			$Nombre_Modulo = utf8_encode($row_Modulo['Nombre_Modulo']);

	}


mysqli_free_result($result_Modulo);


mysqli_close($conn_Modulo);


?>
