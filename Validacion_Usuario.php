<?php

$servername = "ns5928.banahosting.com";
$database = "sashsgur_luzmamusic";
$username = "sashsgur_javier";
$password = "Jasuare01.";


$Usuario = $_REQUEST['Usuario'];
$Contrasena = $_REQUEST['Contrasena'];
$Curso = $_REQUEST['Curso'];


// Create connection

$conn_Validacion_Usuario = mysqli_connect($servername, $username, $password, $database);


mysqli_set_charset('utf8', $link);


// Check connection
if (!$conn_Validacion_Usuario) {
    die("Connection failed: " . mysqli_connect_error());
}

// echo "Connected successfully";


// Establecer contacto con la base de datos a consultar

mysqli_select_db($conn_Validacion_Usuario,$database) or die('No se pudo seleccionar la base de datos');

// echo "Llamado a la base de datos exitosa";



// **************************************************************************
// **************************************************************************
// **************************************************************************



// Definir variables que serán parte de la consulta a realizar posteriormente:

$query_Validacion_Usuario = "SELECT  * FROM  Usuarios_Cursos WHERE Usuario='$Usuario' AND ContraPass='$Contrasena'";

// Validar si la consulta a la base de datos es éxitosa:

$result_Validacion_Usuario = mysqli_query($conn_Validacion_Usuario,$query_Validacion_Usuario) or die('Consulta fallida Ingreso_Usuario_2: ' . mysql_error());


	while ($row_Validacion_Usuario=mysqli_fetch_array($result_Validacion_Usuario,MYSQLI_ASSOC)) {

	header('Content-Type: text/html; charset=utf-8');
	ini_set('default_charset', 'utf-8');

      $Validacion_Usuario = $row_Validacion_Usuario['id_Usuario_Curso'];


      if ($Validacion_Usuario<>'' || $Validacion_Usuario<>'0'){

        include 'Validacion_Curso.php';

      }

	}

  if ($Validacion_Usuario=='' || $Validacion_Usuario=='0'){

    header("Status: 301 Moved Permanently");
    header("Location: https://javiersuarezdominguez.com/luzmamusic/Ingreso_Usuario.php?Modulo=1&Curso=1");
    exit;

  }


mysqli_free_result($result_Validacion_Usuario);


mysqli_close($conn_Validacion_Usuario);


?>
