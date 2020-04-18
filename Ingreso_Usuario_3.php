<?php

$servername = "ns5928.banahosting.com";
$database = "sashsgur_luzmamusic";
$username = "sashsgur_javier";
$password = "Jasuare01.";


// Create connection

$conn_Mercado_Pago = mysqli_connect($servername, $username, $password, $database);


mysqli_set_charset('utf8', $link);


// Check connection
if (!$conn_Mercado_Pago) {
    die("Connection failed: " . mysqli_connect_error());
}

// echo "Connected successfully";


// Establecer contacto con la base de datos a consultar

mysqli_select_db($conn_Mercado_Pago,$database) or die('No se pudo seleccionar la base de datos');

// echo "Llamado a la base de datos exitosa";



// **************************************************************************
// **************************************************************************
// **************************************************************************



// Definir variables que serán parte de la consulta a realizar posteriormente:

$query_Mercado_Pago = "SELECT  * FROM  Cursos WHERE id_Cursos='$Curso'";

// Validar si la consulta a la base de datos es éxitosa:

$result_Mercado_Pago = mysqli_query($conn_Mercado_Pago,$query_Mercado_Pago) or die('Consulta fallida Ingreso_Usuario_3: ' . mysql_error());


	while ($row_Mercado_Pago=mysqli_fetch_array($result_Mercado_Pago,MYSQLI_ASSOC)) {

	header('Content-Type: text/html; charset=utf-8');
	ini_set('default_charset', 'utf-8');

      $Numero_Mercado_Pago = utf8_encode($row_Mercado_Pago['Mercado_Pago']);


	}


mysqli_free_result($result_Mercado_Pago);


mysqli_close($conn_Mercado_Pago);


?>
