<a href="datos.php">Cerrar sesi&oacute;n</a><br/>
<?php
$Nombre = $_POST['Nombre'];
$Telefono = $_POST['telefono'];
$Celular = $_POST['Celular'];
$Domicilio = $_POST['Domicilio'];
$Colonia = $_POST['colonia'];
$Cp = $_POST['cp'];


echo "<table border='2'>";
echo "<tr>";
echo "<th>Nombre</th>";   
echo "<th>Telefono</th>";
echo "<th>Celular</th>";
echo "<th>Domicilio</th>";
echo "<th>Colonia</th>";
echo "<th>CP</th>";
echo "</tr>";
echo "<tr>";
echo "<td>$Nombre</td>";
echo "<td>$Telefono</td>";
echo "<td>$Celular</td>";
echo "<td>$Domicilio</td>";
echo "<td>$Colonia</td>";
echo "<td>$Cp</td>";
echo "</tr>";
echo "</table>";


   

include('conexion.php');
$Con = new conexion();
$Con->Insertar($Nombre,$Telefono,$Celular,$Domicilio,$Colonia,$Cp);

?>
<a href="redireccionar.php">Volver</a>
