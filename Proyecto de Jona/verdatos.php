<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
 if(isset($_GET['id']))	{
	$id=$_GET['id'];
	$con = mysql_connect('localhost','leo','') or die ("NO CONECTO BASE DE DATOS"); 
        mysql_select_db('directorio',$con);
	$query="SELECT * FROM datos where id='".$id."'";
	$resultado=mysql_query($query);
		if ($fila = mysql_fetch_array($resultado)){ 
  		        echo "<p>Nombre: ".$fila['nombre']."</p><p>Telefono: ".$fila['telefono']."</p><p>celular: ".$fila['celular']."</p><p>Domicilio: ".$fila['domicilio']."</p><p>Colonia: ".$fila['colonia']."</p><p>Codigo Postal: ".$fila['cp']."</p>";
       		}
  }
echo "<a href=\"redireccionar.php\">Volver</a>";
?>

</body>
</html>
