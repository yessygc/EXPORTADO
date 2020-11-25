<?php
$conexion=mysqli_connect('localhost', 'root', '', 'basewyji');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="estilo.css">
  <title>Tabla proveedor</title>
</head>
<header>
	<h1>WYJI</h1>
	<div style="text-align: right"><img src="ofer.png" class="imagen" /></div>
	<input  class="controls" type="search" name="busqueda" id="busqueda" placeholder="Busqueda">
</header>
<body background="Fondos/este.jpg">
	<button class="botons" onclick="location.href='catalogo.html'">Atras</button>
	<button class="botons" onclick="location.href='registro_proveedor2.php'">Registrar nuevo proveedor</button>
	<div class="table">
		<div class="table--titlePr">Proveedores</div>
		<div class="table-proveedor">idproveedor </div>
		<div class="table-proveedor">nombre </div>
		<div class="table-proveedor">apepat </div>
		<div class="table-proveedor">apemat </div>
		<div class="table-proveedor">empresa </div>
		<div class="table-proveedor">telefono </div>
		<div class="table-proveedor">telefonoempresa </div>
		<div class="table-proveedor">correoempresa </div>
		<div class="table-proveedor">fechaentrega</div>
		<?php 
		$sql= "SELECT * FROM proveedor";
		$resultado=mysqli_query($conexion,$sql);
		
		while($mostrar=mysqli_fetch_array($resultado)){ ?>
		<div class="table-prov"><?php echo $mostrar["idproveedor"];?></div>
		<div class="table-prov"><?php echo $mostrar["nombre"];?></div>
		<div class="table-prov"><?php echo $mostrar["apepat"];?></div>
		<div class="table-prov"><?php echo $mostrar["apemat"];?></div>
		<div class="table-prov"><?php echo $mostrar["empresa"];?></div>
		<div class="table-prov"><?php echo $mostrar["telefono"];?></div>
		<div class="table-prov"><?php echo $mostrar["telefonoempresa"];?></div>
		<div class="table-prov"><?php echo $mostrar["correoempresa"];?></div>
		<div class="table-prov"><?php echo $mostrar["fechaentrega"];?></div>
		<?php }?>
	</div>
	
</body>
</html>