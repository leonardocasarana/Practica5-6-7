<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$con = mysql_connect('localhost','leo','') or die ("NO CONECTO BASE DE DATOS"); 
                mysql_select_db('directorio',$con);
		$query="SELECT * FROM datos where id='".$id."'";
		$resultado = mysql_query($query);


			if ($fila = mysql_fetch_array($resultado))
			{ 
?>				<form action="editarguardados.php" method="post">
  				<p>Nombre <input type="text" name="nombre" value="<?php echo $fila['nombre'];?>"required/></p>
				<p>Telefono <input type="text" name="telefono" value="<?php echo $fila['telefono'];?>"required/></p>
				<p>Celuar <input type="text" name="celular" value="<?php echo $fila['celular'];?>"/></p>
				<p>Domicilio <input type="text" name="domicilio" value="<?php echo $fila['domicilio'];?>"/></p>
				<p>Colonia <input type="text" name="colonia" value="<?php echo $fila['colonia'];?>"/></p>
                                <p>Codigo Postal <input type="text" name="cp" value="<?php echo $fila['cp'];?>"/></p>
                                <input type="hidden" name="id" value="<?php echo $fila['id'];?>"/>
				<input type="submit" value="Guardar"/>
				<?php echo "<a href=\"redireccionar.php\">Volver</a>";?>
	    </form>
<?php
       			}
	 }

?>


</body>
</html>
