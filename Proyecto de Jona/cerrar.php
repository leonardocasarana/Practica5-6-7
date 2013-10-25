<?php
if($_POST['cerrar']){
session_start();
session_destroy();
header("Location:ingresar.php");
}
?>
