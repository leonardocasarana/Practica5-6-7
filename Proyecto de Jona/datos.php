<?php
session_start();
if(isset($_SESSION['usuario'])){
	header('location: datos.php');
	
}

if( ($_POST['codigo'] == 100 && $_POST['contraseņa'] == "udg") ||
	($_POST['codigo'] == 110 AND $_POST['contraseņa'] == "cutonala") ||
	($_POST['codigo'] == 1 AND $_POST['contraseņa'] == "root")){
	$_SESSION['usuario']=$_POST['codigo'];

	
	header('location: redireccionar.php');

}else{
	
	header('location: ingresar.php');
}


?>
