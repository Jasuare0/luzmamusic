
<!DOCTYPE html>

<head>

	<title>Musica Maestro - Luz Marina Dominguez</title>

	<style>

	* {

			margin: 0px;
			padding: 0px;

	}

	h1{
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

			.Marco_Cursos{
					width: 100%;

					display: flex;
					flex-direction:row;
					flex-wrap:wrap;
					align-items: center;
					align-content:center;

					border: 1px solid grey;

			}

			.Marco_Imagenes_Cursos{
					width: 99%;
					height: 650px;
					margin: 10px;
					text-align:center;


			}

			.Imagen_Cursos{
				width:100%;
				height:510px;
				border-radius: 10px;

			}

			.Titulo_Seccion{

				font-size:100px;
				padding-top:50px;
				padding-bottom:50px;
				border-top: 1px solid grey;
				border-bottom: 1px solid grey;
				color: #585858;


			}

			.Titulo_Curso {
				font-size:80px;
				height:100px;
				color: black;

			}


		}

		@media only screen and (min-width: 1001px) {

			.Imagen_Principal {
					width:100%;
					height:100vh;

			}

			.Marco_Cursos{
					width: 100%;

					display: flex;
					flex-direction:row;
					flex-wrap:wrap;
					align-items: center;
					align-content:center;

					border: 1px solid grey;

			}

			.Marco_Imagenes_Cursos{
					width: 31%;
					height: 250px;
					margin: 10px;
					text-align:center;


			}

			.Imagen_Cursos{
				width:100%;
				height:200px;
				border-radius: 10px;

			}

		}


	</style>

</head>

<body>

	<img src="img/piano-guitarra.jpg" class="Imagen_Principal"/>


	<h1 class="Titulo_Seccion">ONLINE CLASSES</h1>

	<div class="Marco_Cursos">
		<div class="Marco_Imagenes_Cursos">
				<h2 class="Titulo_Curso">Guitar</h2>
				<a href="Cursos.php?Curso_Categoria=1"><img src="img/guitar1.jpg" class="Imagen_Cursos"/></a>
		</div>

		<div class="Marco_Imagenes_Cursos">
				<h2 class="Titulo_Curso">Ukelele</h2>
				<a href="Cursos.php?Curso_Categoria=2"><img src="img/Ukelele.jpg" class="Imagen_Cursos"/></a>
		</div>

		<div class="Marco_Imagenes_Cursos">
				<h2 class="Titulo_Curso">Singing</h2>
				<a href="Cursos.php?Curso_Categoria=3"><img src="img/singer.jpg" class="Imagen_Cursos"/></a>
		</div>

	</div>


</body>


<footer>

	<h3>&#169; 2020</h3>
	<h4>Website Design Javier Suárez</h4>

</footer>

</html>
