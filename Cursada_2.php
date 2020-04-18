<?php

$servername = "ns5928.banahosting.com";
$database = "sashsgur_luzmamusic";
$username = "sashsgur_javier";
$password = "Jasuare01.";


// Create connection

$conn_Estrategia = mysqli_connect($servername, $username, $password, $database);


mysqli_set_charset('utf8', $link);


// Check connection
if (!$conn_Estrategia) {
    die("Connection failed: " . mysqli_connect_error());
}

// echo "Connected successfully";


// Establecer contacto con la base de datos a consultar

mysqli_select_db($conn_Estrategia,$database) or die('No se pudo seleccionar la base de datos');

// echo "Llamado a la base de datos exitosa";



// **************************************************************************
// **************************************************************************
// **************************************************************************



// Definir variables que serán parte de la consulta a realizar posteriormente:

$query_Estrategia = "SELECT  * FROM  Contenido_Curso WHERE Referencia_Curso='$Curso' AND Modulo='$Modulo' ORDER BY Orden ASC";


// Validar si la consulta a la base de datos es éxitosa:

$result_Estrategia = mysqli_query($conn_Estrategia,$query_Estrategia) or die('Consulta fallida Estrategia: ' . mysql_error());


	while ($row_Estrategia=mysqli_fetch_array($result_Estrategia,MYSQLI_ASSOC)) {

	header('Content-Type: text/html; charset=utf-8');
	ini_set('default_charset', 'utf-8');

      $TamanoImagen = $row_Estrategia['TamanoImagen'];

      if($TamanoImagen==''){

      echo '<div class="Marco_Contenedor">';
    		echo '<div class="Marco_Imagen">';
    			echo '<img src="img/'.utf8_encode($row_Estrategia['Imagen_Contenido']).'" class="Imagen_Contenido"/>';
    		echo '</div>';

    		echo '<div class="Marco_Contenido">';
    			echo '<h2>'.utf8_encode($row_Estrategia['Titulo']).'</h2>';
    			echo '<textarea>'.utf8_encode($row_Estrategia['Contenido']).'';
    			echo '</textarea>';
    		echo '</div>';

    	echo '</div>';

    }else {

      echo '<div class="Marco_Contenedor">';
        echo '<div class="Marco_Imagen_Grande">';
          echo '<img src="img/'.utf8_encode($row_Estrategia['Imagen_Contenido']).'" class="Imagen_Contenido_Grande"/>';
        echo '</div>';

      echo '</div>';

    }

    	echo '</br>';
    	echo '</br>';

	}


mysqli_free_result($result_Estrategia);


mysqli_close($conn_Estrategia);


?>
