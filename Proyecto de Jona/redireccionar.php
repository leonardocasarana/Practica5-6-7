<?php
session_start();
if(!isset($_SESSION['usuario'])){
	header('location: ingresar.php');
}
echo "BIENVENIDO ".$_SESSION['usuario']."<br/>";
?>
<form action="nuevo.php" method="POST"> 
<a href="nuevo.php">Nuevo</a>
<a href="datos.php">Cerrar sesion</a>
<?php
include('conexion.php');
$Con = new conexion();
$Con->tablaDatos();
?>
