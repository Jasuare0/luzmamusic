<?php

$servername = "ns5928.banahosting.com";
$database = "sashsgur_luzmamusic";
$username = "sashsgur_javier";
$password = "Jasuare01.";


// Create connection

$conn_Cursos = mysqli_connect($servername, $username, $password, $database);


mysqli_set_charset('utf8', $link);


// Check connection
if (!$conn_Cursos) {
    die("Connection failed: " . mysqli_connect_error());
}

// echo "Connected successfully";


// Establecer contacto con la base de datos a consultar

mysqli_select_db($conn_Cursos,$database) or die('No se pudo seleccionar la base de datos');

// echo "Llamado a la base de datos exitosa";



// **************************************************************************
// **************************************************************************
// **************************************************************************



// Definir variables que serán parte de la consulta a realizar posteriormente:

$query_Cursos = "SELECT  * FROM  Cursos WHERE Curso_Categoria='$Curso_Categoria'";


// Validar si la consulta a la base de datos es éxitosa:

$result_Cursos = mysqli_query($conn_Cursos,$query_Cursos) or die('Consulta fallida Estrategia: ' . mysql_error());


	while ($row_Cursos=mysqli_fetch_array($result_Cursos,MYSQLI_ASSOC)) {

	header('Content-Type: text/html; charset=utf-8');
	ini_set('default_charset', 'utf-8');

    echo '<div class="Marco_Imagenes_Cursos">';
        echo '<h2 class="Titulo_Curso">'.utf8_encode($row_Cursos['Nombre_Curso']).'</h2>';
        echo '<a href="https://javiersuarezdominguez.com/luzmamusic/Ingreso_Usuario.php?Modulo=1&Curso='.utf8_encode($row_Cursos['id_Cursos']).'"><img src="img/'.utf8_encode($row_Cursos['Imagen_Curso']).'" class="Imagen_Cursos"/></a>';
    echo '</div>';


	}


mysqli_free_result($result_Cursos);


mysqli_close($conn_Cursos);


?>
