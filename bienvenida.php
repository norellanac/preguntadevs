<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  	<link rel="icon" type="image/png" href="imgs/umglogo.png" />
	<link href='https://fonts.googleapis.com/css?family=Cabin+Sketch' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css">
	<script src="js/bootstrap.min.js" ></script>
	<script src="js/jquery.js" ></script>
	<title> PRIMER CRUD MVC</title> <!-- -->
	<style type="text/css">
		body{
			padding-top: 20px; <!-- tamaño de la barra de navegacion es de 80 px-->
		}
	</style>
	
</head>
<script type="text/javascript">
function alerta() {
alert("¡Gracias Por Contactarnos!");}
</script>
<?php 
	session_start();
	if (!isset($_SESSION["sessionUsuario"])){
		header("location:index.html");
	}
	
 ?>
<body class="">
	<div class="container-fluid ">  
		<header>  <!-- barra de navegacion  -->
			<nav class=" navbar navbar-default navbar-fixed-top navbar-inverse"> 
				<div class="container-fluid">
					<div class="navbar-header "> 
						<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
							<span class="sr-only"></span>
							<span class="glyphicon glyphicon-th-list"></span> <!-- usando un icono para que muestre como menu-->
							<span class="icon-bar"></span> 
						</button>
						<a href="bienvenida.php" class="navbar-brand">< ? PREGUNTADEVS ?></a> 
					</div>
					<div class="collapse navbar-collapse" id="navbar-1">
						<ul class="nav navbar-nav">
							<li><a href="acerca-de-preguntadevs.php"> <span class="glyphicon glyphicon-info-sign visible-xs"> Acerca De </span> <span class="visible-sm visible-md visible-lg">  Acerca De</span> </a></li>
							<li>
								<a class=" dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-extended="true"><span class="glyphicon glyphicon-user visible-xs"> <?php echo $_SESSION["sessionUsuario"];	 ?> </span> <span class="visible-sm visible-md visible-lg">  <?php echo $_SESSION["sessionUsuario"];	 ?> <span class="caret"></span> </span>
				<!-- icono del trianguilito-->
			</a>
			<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1"> <!--lista de elemnetos -->
				<li><a href="#"> <span class="glyphicon glyphicon-user visible-xs"> Configuracion </span> <span class="visible-sm visible-md visible-lg">  Configuracion</span> </a></li>
				<li><a href="php/cerrarSession.php"> <span class="glyphicon glyphicon-remove-sign visible-xs"> Cerrar Sesión </span> <span class="visible-sm visible-md visible-lg">  Cerrar Sesión</span> </a></li>
			</ul>
							</li>
						</ul>

						<form action="http://www.google.es/search" method="GET" class="navbar-form navbar-right" role="search" > 
						<div class="form-group">
							<input type="hidden" name="ie" value="UTF-8">
							<input type="hidden" name="ie" value="UTF-8">
							
					        <input type="hidden" name="domains" value="http://umgproyectos.hol.es/" />
					        <input class="hidden" type="radio" name="sitesearch" value="http://umgproyectos.hol.es/" checked  />
					        <div class="form-group">
								<div class="input-group ">
									<label class="sr-only" for="correo">Buscar</label> 
									<span>
									<span><input type="text" class="form-control" placeholder="Buscar"> 
									</span>
									<button class="btn btn-default pull-right"> <span class="glyphicon glyphicon-search "></span>

									</button>
									
									</span>
									<div class=""></div>
									
								</div>
							</div>
						</div>
						
					</form>
					</div>
				</div>
			</nav>
		</header>
	</div>
	<section class="container">
		<section class=" col-md-9">
		<article class=" text-center ">	

	
	



  
</div>
	<div class="row">
		<div class="">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <h3>% DE USUARIO</h3>
      <div class="caption bg-info">
        <span class="glyphicon glyphicon-user"></span>
        <p>... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit esse ipsa, inventore dolores, cupiditate earum. Nobis et, esse earum. Aliquam placeat quidem, nesciunt perferendis cupiditate recusandae explicabo harum a modi.</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>
<div class="">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <h3>% RESPUESTAS CORRECCTAS</h3>
      <div class="caption bg-success">
        <span class="glyphicon glyphicon-thumbs-up"></span>
        <p>... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit esse ipsa, inventore dolores, cupiditate earum. Nobis et, esse earum. Aliquam placeat quidem, nesciunt perferendis cupiditate recusandae explicabo harum a modi.</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>
<div class="">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <h3>% RESPUESTAS ERRONEAS</h3>
      <div class="caption bg-danger">
        <span class="glyphicon glyphicon-thumbs-down"></span>
        <p>... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit esse ipsa, inventore dolores, cupiditate earum. Nobis et, esse earum. Aliquam placeat quidem, nesciunt perferendis cupiditate recusandae explicabo harum a modi.</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>
	</div>
	
<?php
		require_once("controlador/preguntasControlador.php");
	 ?>	  <!-- llama a la tabla ya con datos y estilos desde vista/tablaVista.php -->




			
			

		</article>

		
	</section>
	<aside class="col-md-3 hidden-xs hidden-sm text-justify">

  	
	<div class="panel panel-primary">
	  <!-- Default panel contents -->
	   <div class="panel-heading">Nueva Pregunta </div>
	  <div class="panel-body">
	    <form action="php/loguin.php" method="post">
			<div class="form-group"> <!-- agrupa los elementos y deja un espaciado-->
				<label for="PREGUNTA">PREGUNTA:</label>
				<input type="text" name="PREGUNTA" id="PREGUNTA" class="form-control" placeholder="Ingrese la nueva pregunta?: ">
				<label for="RESPA">RESPUESTA A:</label>
				<input type="text" name="RESPA" id="RESPA" class="form-control" placeholder="Respuesta A: ">
				<label for="RESPB">RESPUESTA B:</label>
				<input type="text" name="RESPB" id="RESPB" class="form-control" placeholder="Respuesta B: ">
				<label for="RESPC">RESPUESTA C:</label>
				<input type="text" name="RESPC" id="RESPC" class="form-control" placeholder="Respuesta C: ">
				<label for="RESPCORRECTA">RESPUESTA CORRECTA:</label>
				<input type="text" name="RESPCORRECTA" id="RESPCORRECTA" class="form-control" placeholder="Respuesta Correcta: ">
				<label for="NIVEL">NIVEL:</label>
				<input type="text" name="NIVEL" id="NIVEL" class="form-control" placeholder="NIVEL DE DIFICULTAD">
				<label for="ETIQUETA">ETIQUETA:</label>
				<input type="text" name="ETIQUETA" id="ETIQUETA" class="form-control" placeholder="ETIQUETA O CATEGORIA">
			</div>
		<button class="btn btn-success" onclick="pacman.html"> AGREGAR</button>
	</form>
	  </div>
	</div>

	


  	
  </aside>
	</section>
	<footer class="container bg-primary">
    	<p class="text-center">DERECHOS RESERVADOS &copy; 2017 <a href="http://norellana.hol.es/" class="text-blanco">Nery AlexisOrellana Cuy</a></p>
	</footer> 
	<script src="js/bootstrap.min.js" ></script>
	<script src="js/jquery.js" ></script>
	
</body>
</html>