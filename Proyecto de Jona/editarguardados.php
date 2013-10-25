<!DOCTYPE html>
<html>
<head></head>
<body>
<?php


$id = $_POST["id"];
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$celular = $_POST["celular"];
$domicilio = $_POST["domicilio"];
$colonia = $_POST["colonia"];
$codigo = $_POST["cp"];
$con = mysql_connect('localhost','leo','') or die ("NO CONECTO BASE DE DATOS"); 
mysql_select_db('directorio',$con);

$insertar="UPDATE datos SET nombre='$nombre',telefono='$telefono',celular='$celular',domicilio='$domicilio',colonia='$colonia',cp='$codigo' where id='$id'";
mysql_query($insertar,$con)or die (mysql_error());
echo "GUARDADO\n";	
echo "<a href=\"redireccionar.php\">Volver</a>";



?>
</body>
</html>
