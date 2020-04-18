<?php

$servername = "ns5928.banahosting.com";
$database = "sashsgur_luzmamusic";
$username = "sashsgur_javier";
$password = "Jasuare01.";


// Create connection

$conn_Validacion_Curso = mysqli_connect($servername, $username, $password, $database);


mysqli_set_charset('utf8', $link);


// Check connection
if (!$conn_Validacion_Curso) {
    die("Connection failed: " . mysqli_connect_error());
}

// echo "Connected successfully";


// Establecer contacto con la base de datos a consultar

mysqli_select_db($conn_Validacion_Curso,$database) or die('No se pudo seleccionar la base de datos');

// echo "Llamado a la base de datos exitosa";



// **************************************************************************
// **************************************************************************
// **************************************************************************



// Definir variables que serán parte de la consulta a realizar posteriormente:

$query_Validacion_Curso = "SELECT  * FROM  Cursos_Habilitados WHERE Usuario_Cursos_Habilitados='$Validacion_Usuario' AND Curso_Habilitado='$Curso'";

// Validar si la consulta a la base de datos es éxitosa:

$result_Validacion_Curso = mysqli_query($conn_Validacion_Curso,$query_Validacion_Curso) or die('Consulta fallida Validacion_Curso: ' . mysql_error());


	while ($row_Validacion_Curso=mysqli_fetch_array($result_Validacion_Curso,MYSQLI_ASSOC)) {

	header('Content-Type: text/html; charset=utf-8');
	ini_set('default_charset', 'utf-8');


    $Validacion_Curso = $row_Validacion_Curso['id_Cursos_Habilitados'];


    if ($Validacion_Curso<>'' || $Validacion_Curso<>'0'){

      $Modulo = 1;
      include 'Cursada.php';

    }

  }

  if ($Validacion_Curso=='' || $Validacion_Curso=='0'){

  header("Status: 301 Moved Permanently");
  header("Location: https://javiersuarezdominguez.com/luzmamusic/Ingreso_Usuario.php?Modulo=1&Curso=$Curso");
  exit;

  }


mysqli_free_result($result_Validacion_Curso);


mysqli_close($conn_Validacion_Curso);


?>
