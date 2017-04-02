<?php 
	require_once("modelo/conectarModelo.php");
	$base=Conectar::conexion();
	$sql="SELECT * FROM tbusuarios WHERE usuarioId= :usuario AND claveSeguridad= :clave";
		$resultado=$base->prepare($sql);
		$usuario=htmlentities(addcslashes($_POST["usuario"],''));
		$clave=htmlentities(addcslashes($_POST["clave"],''));
		$resultado-> bindValue(":usuario", $usuario);
		$resultado-> bindValue(":clave", $clave);
		$resultado-> execute ();
		$numero_columnas=$resultado-> rowCount();
		if ($numero_columnas!=0){
			session_start();
			$_SESSION["sessionUsuario"]=$_POST["usuario"];
			header("location:http:../gps_arduino.php");
		}else{
			header("location:../index.html");
		}
 ?>