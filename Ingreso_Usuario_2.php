<?php

$servername = "ns5928.banahosting.com";
$database = "sashsgur_luzmamusic";
$username = "sashsgur_javier";
$password = "Jasuare01.";


// Create connection

$conn_Informacion_Curso = mysqli_connect($servername, $username, $password, $database);


mysqli_set_charset('utf8', $link);


// Check connection
if (!$conn_Informacion_Curso) {
    die("Connection failed: " . mysqli_connect_error());
}

// echo "Connected successfully";


// Establecer contacto con la base de datos a consultar

mysqli_select_db($conn_Informacion_Curso,$database) or die('No se pudo seleccionar la base de datos');

// echo "Llamado a la base de datos exitosa";



// **************************************************************************
// **************************************************************************
// **************************************************************************



// Definir variables que serán parte de la consulta a realizar posteriormente:

$query_Informacion_Curso = "SELECT  * FROM  Modulos WHERE Curso='$Curso'";

// Validar si la consulta a la base de datos es éxitosa:

$result_Informacion_Curso = mysqli_query($conn_Informacion_Curso,$query_Informacion_Curso) or die('Consulta fallida Ingreso_Usuario_2: ' . mysql_error());


	while ($row_Informacion_Curso=mysqli_fetch_array($result_Informacion_Curso,MYSQLI_ASSOC)) {

	header('Content-Type: text/html; charset=utf-8');
	ini_set('default_charset', 'utf-8');

      $Numero_Modulo = utf8_encode($row_Informacion_Curso['Numero_Modulo']);

			$Nombre_Informacion_Curso = utf8_encode($row_Informacion_Curso['Nombre_Modulo']);


  					echo '<h2 class="Titulo_Listado_Modulos">'.  $Numero_Modulo.' - '.$Nombre_Informacion_Curso.'</h2>';


	}


mysqli_free_result($result_Informacion_Curso);


mysqli_close($conn_Informacion_Curso);


?>
