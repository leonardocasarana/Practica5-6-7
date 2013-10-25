<html>
<?php
 class conexion
 {
  function tablaDatos()
  {
   $con = mysql_connect('localhost','leo','') or die ("NO CONECTO BASE DE DATOSz"); 
   mysql_select_db('directorio',$con);
   
   	$query="SELECT * FROM datos;";
	$resultado=mysql_query($query);
	
	echo "<table border='5' cellspacing='5' >";
	echo "<th>ID</th><th>NOMBRE</th><th>TELEFONO</th><th colspan='3'>OPCIONES<t/h>";
	
	while($fila = mysql_fetch_array($resultado))
	{
	 
         echo "<tr>";
	 
	 echo "<td>$fila[id]</td><td>$fila[nombre]</td><td>$fila[telefono]</td><td><a href=\"verdatos.php?id=".$fila["id"]."\">Ver</a></td><td> <a href=\"editar.php?id=".$fila["id"]."\">Editar</a></td><td><a href=\"eliminar.php?id=".$fila["id"]."\">Eliminar</a></td>";
	 echo "</tr>";
	
	 
	}
	echo "</table>";
  }
  
  function Insertar($Nombre,$Telefono,$Celular,$Direccion,$Colonia,$Cp)
  {
	$con = mysql_connect('localhost','leo','') or die ("NO CONECTO BASE DE DATOS"); 
    mysql_select_db('directorio',$con);
   
   	$query="INSERT INTO datos(nombre,telefono,celular,domicilio,colonia,cp) VALUES ('".$Nombre."','".$Telefono."','".$Celular."','".$Direccion."','".$Colonia."','".$Cp."');";
	
	mysql_query($query) or die ("ERROR en el query ".$query);
	echo "<p>GUARDADO CON EXITO</p>";
  }
 }
?>
</html>
