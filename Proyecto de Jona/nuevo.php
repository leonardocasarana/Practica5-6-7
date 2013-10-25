<?php
session_start();
if(!isset($_SESSION['usuario'])){
	header('location: ingresar.php');
}

?>
<!DOCTYPE html>
<html>
    <head>
 <div>
<body>
<?php
echo "".$_SESSION['usuario']."<br/>";
?>
	 <form action="ver.php" method="POST">       
        
	
	<table width="50%" align="center"border="0"cellspacing="0"cellpadding="0">
	<tr>
        <td>
        <fieldset>
	<legend><h1>Nuevo contacto</h1></legend>
     


      <label for="txtNombre*">Nombre</label><br/>
        <input type="text" size="30" maxlength="255"  name="Nombre" required/><br/>
     
      <label for="txttel&eacute;fono">Tel&eacute;fono</label><br/>
        <input type="text" size="30" maxlength="255" id="txttel&eacute;fono" name="telefono" required/><br/>
 
      <label for="txtCelular">Celular</label><br/>
        <input type="text" size="30" maxlength="255" id="txtCelular" name="Celular" /><br/>

      <label for="txtDomicilio">Domicilio</label><br/>
        <input type="text" size="30" maxlength="255" id="txtDomicilio" name="Domicilio" /><br/>

      <label for="txtcolonia">Colonia</label><br/>
        <input type="text" size="30" maxlength="255" id="txtcolonia" name="colonia" /><br/>

      <label for="txtcp">CP</label><br/>
        <input type="text" size="30" maxlength="255" id="txtcp" name="cp" /><br/>

       <input type="submit" value="Guardar"/><br/>
      
       
 

      </div>   
    </body>
</html>

