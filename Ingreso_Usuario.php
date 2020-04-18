
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

			.Marco_General{
				width: 100%;
				display: flex;
				flex-direction: column;
				align-items: center;
				align-content: center;


			}

			.Marco_Contenido{
				width: 80%;
				border: 1px solid grey;
				text-align:center;
				border-radius: 10px;
				margin:10px;

			}

			label{
				font-weight: normal;
				font-size:60px;

			}

			input {
				height: 100px;
				width: 80%;
				border-radius: 10px;
				font-size: 60px;
			}


			.Boton_Ingresar {
				font-size: 50px;
				height: 120px;
			}

			.Imagen_Metodo_Pago {
				width: 70%;
				height:auto;
			}

			.Titulo_Listado_Modulos{
				text-align:left;
				font-weight:normal;
				padding-left:10px;
				font-size: 60px;

			}


		}

		@media only screen and (min-width: 1001px) {

			.Imagen_Principal {
					width:100%;
					height:100vh;

			}

			.Marco_General{
				width: 100%;
				display: flex;
				flex-direction: column;
				align-items: center;
				align-content: center;


			}

			.Marco_Contenido{
				width: 30%;
				border: 1px solid grey;
				text-align:center;
				border-radius: 10px;
				margin:10px;

			}

			label{
				font-weight: bold;

			}

			input {
				height: 80px;
				width: 80%;
				border-radius: 10px;
				font-size: 60px;
			}


			.Boton_Ingresar {
				font-size: 50px;
			}

			.Imagen_Metodo_Pago {
				width: 70%;
				height:auto;
			}

			.Titulo_Listado_Modulos{
				text-align:left;
				font-weight:normal;
				padding-left:10px;
			}

		}


	</style>

</head>

<body>

	<img src="img/piano-guitarra.jpg" class="Imagen_Principal"/>

	</br>
	</br>

	<h1>LOG IN TO ACCESS:</h1>
	</br>
	</br>

	<?php

		$Curso = $_REQUEST['Curso'];

	?>

	<div class="Marco_General">

		<div class="Marco_Contenido">

			<form method="post" action="Validacion_Usuario.php">
				</br>
				</br>
				<label>USER</label>
				</br>
				</br>

				<input type="text" name="Usuario"/>

				</br>
				</br>

				<label>PASSWORD</label>
				</br>
				</br>

				<input type="password"  name="Contrasena"/>
				</br>
				</br>

				<?php
					echo '<input type="hidden" name="Curso" value="'.$Curso.'"/>';

 				?>

				<input type="submit" value="Submit" class="Boton_Ingresar"/>

				</br>
				</br>

			</form>

		</div>

	</div>



	</br>
	</br>


	<h1>OVERVIEW:</h1>
	</br>

	<div class="Marco_General">

		<div class="Marco_Contenido">

				</br>

<?php


	include 'Ingreso_Usuario_2.php';


 ?>

			</br>
			</br>

		</div>

	</div>

	</br>
	</br>

</br>
</br>

	<h1><a href="https://javiersuarezdominguez.com/luzmamusic">Click here to return to the Main Page</a></h1>

</br>
</br>


</body>


<footer>

	<h3>&#169; 2020</h3>
	<h4>Website Design Javier Suárez</h4>

</footer>

</html>
