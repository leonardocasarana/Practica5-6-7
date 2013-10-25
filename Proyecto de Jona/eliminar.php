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
		$query="Delete FROM datos where id='".$id."'";
		mysql_query($query,$con)or die (mysql_error());
}

		header("location:redireccionar.php");


?>
</body>
</html>
