<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MVC PHP</title>
</head>
<body>
<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading">TEST PREGUNTADEVS  </div>
  
	

  <!-- Table -->
  <table class="table">
  <tr class="bg-info">
  	<td><b>PREGUNTA</b></td>
  	<td><b>SELECIONE RESPUESTA</b></td>
  	<td><b>RESPONDER</b></td>
  </tr>
    <?php
		#require_once("controlador/tablaControlador.php");
		foreach ($matrizRegistros as $lin1) {
			$dato1= $lin1["PREGUNTA"];
			$dato2=$lin1["RESPA"];
			$dato3= $lin1["RESPB"];
			$dato4= $lin1["RESPC"];
			$dato5= $lin1["RESPCORRECTA"];
			$dato6= $lin1["NIVEL"];
			$dato7= $lin1["ETIQUETA"];
			$dato8= $lin1["IDPREGUNTA"];
			$dato9= $lin1["USUARIO"];
		 	echo "<tr><td>". $dato1 . " </td>	";
		 	echo "<td> <select>
				  <option value=\"$dato2\">$dato2</option>
				  <option value=\"$dato3\">$dato3</option>
				  <option value=\"$dato4\">$dato4</option>
				</select></td>";
		 	#boton para modificar
		 	echo "<td> <a href='vista/editarUsuario.php?usuarioId=". $dato1 . " & nombre1= ". $dato2 . " & nombre2= ". $dato3 . " & apellido1= ". $dato4 . " & apellido2= ". $dato5 . " & claveSeguridad= ". $dato6 .   " ' > <button class='btn-primary'> ENVIAR </button> </a>  </td>";
		 	#<td><button class='btn-primary'>Actualizar</button></td>";
		 	#echo "<td> <a href='modelo/borrarRegistrosModelo.php?usuarioId=". $dato8 . "' > <button class='btn-danger'> Eliminar </button> </a>  </td>";
		 	#<td> <a href='modelo/borrarRegistrosModelo.php?id=". $dato3 . "' > <input type='button'> </a>  </td> ";
		 	
		 }
	 ?>	

	 <tr>
		 			
		 			<td>
      <a href="index.php" aria-label="Previous" class=" btn">
        <span aria-hidden="true">&laquo;</span>
      </a>
    	<?php 
		require_once("modelo/paginacion.php");
		for ($i=1; $i<=2; $i++) { 		#3 es para definir la cantidad de registros a mostrar en la paginacion
							echo "<a href='?pagina=". $i . "'class=' btn'>" .$i .  "</a> ";
						}
	 ?>
      <a href="index.php?pagina=2" aria-label="Next" class=" btn">
        <span aria-hidden="true">&raquo;</span>
      </a>
<td></td>
<td><a href="vista/agregarUsuario.php"><button class="btn-success">FINALIZAR TEST</button> </a></td>
</tr>
		 			</td>
  </table>
</div>

<table class="table">
	
</table>
	
</body>
</html>