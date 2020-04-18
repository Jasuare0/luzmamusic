
<!DOCTYPE html>

<head>

	<title>Musica Maestro - Luz Marina Dominguez</title>

	<style>

	* {

			margin: 0px;
			padding: 0px;

	}

	h1,h2{
		text-align:center;

	}

	h3,h4{
		text-align:center;

	}

		@media only screen and (max-width: 1000px) {

			.Imagen_Principal {
					width:100%;
					height:30vh;

			}


			.Marco_Contenedor{
				width:100%;
				border: 1px solid grey;
				display:flex;
				flex-direction: row;
				flex-wrap:wrap;


			}

			.Marco_Imagen{
				width:100%;
				height: 650px;

			}

			.Marco_Imagen_Grande {
				width:100%;
				height: 1000px;
			}



			.Imagen_Contenido{
				width:99%;
				height:600px;
				padding:10px;

			}

			.Imagen_Contenido_Grande{
				width:99%;
				height:950px;
				padding:10px;

			}

			.Marco_Contenido{
				width:100%;
				padding:10px;

			}

			textarea{
				text-align:justify;
				padding:10px;
				border: 0px solid white;
				width: 90%;
				height: 500px;
			}

			.Marco_Boton_Siguiente{
				width:100%;

			}

			.Boton_Siguiente{
				position:relative;
				font-size: 80px;
				left:63%;
				height:100px;
				width: 350px;
				border-radius: 5px;
			}


		}

		@media only screen and (min-width: 1001px) {

			.Imagen_Principal {
					width:100%;
					height:100vh;

			}


			.Marco_Contenedor{
				width:100%;
				border: 1px solid grey;
				display:flex;
				flex-direction: row;
				flex-wrap:wrap;


			}

			.Marco_Imagen{
				width:30%;

			}


			.Imagen_Contenido{
				width:100%;
				height:250px;
				padding:10px;

			}

			.Marco_Contenido{
				width:68%;
				padding:10px;

			}

			textarea{
				text-align:justify;
				padding:10px;
				border: 0px solid white;
				width: 90%;
				height: 200px;
			}

			.Marco_Boton_Siguiente{
				width:100%;

			}

			.Boton_Siguiente{
				position:relative;
				left:85%;
				height:70px;
				width: 150px;
				border-radius: 5px;
			}

		}


	</style>

</head>

<body>

	<img src="img/space-class2.jpg" class="Imagen_Principal"/>

	</br>
	</br>

	<?php


		if($Curso==''OR $Modulo=='' OR $Validacion_Usuario==''){

			$Curso=$_REQUEST['Curso'];
			$Modulo=$_REQUEST['Modulo'];
			$Validacion_Usuario = $_REQUEST['Validacion_Usuario'];

			if ($Curso=='' || $Modulo=='' || $Validacion_Usuario==''){

		    header("Status: 301 Moved Permanently");
		    header("Location: https://javiersuarezdominguez.com/luzmamusic");
		    exit;

		  }


		}

		include 'Cursada_3.php';


	echo '<h1>Módulo '.$Modulo.' - '.$Nombre_Modulo.'</h1>';
	echo '</br>';

		include 'Cursada_2.php';

		$Modulo_Siguiente=$Modulo+1;

		echo '<form action="Cursada.php" method="post" class="Marco_Boton_Siguiente">';

			echo '<input type="hidden" value="'.$Validacion_Usuario.'" name="Validacion_Usuario"/>';
			echo '<input type="hidden" value="'.$Modulo_Siguiente.'" name="Modulo"/>';
			echo '<input type="hidden" value="'.$Curso.'" name="Curso"/>';

			echo '<input type="submit" value="Siguiente" class="Boton_Siguiente"/>';

		echo '</form>';

	?>




</body>

</br>
</br>

</br>
</br>

	<h1><a href="https://javiersuarezdominguez.com/luzmamusic">Click here to return to the Main Page</a></h1>

</br>
</br>


<footer>

	<h3>&#169; 2020</h3>
	<h4>Diseño Javier Suárez</h4>

</footer>

</html>
