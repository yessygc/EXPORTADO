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
  <title>Tabla Productos</title>
</head>
<header>
	<h1>WYJI</h1>
	<div style="text-align: right"><img src="ofer.png" class="imagen" /></div>
	<input  class="controls" type="search" name="busqueda" id="busqueda" placeholder="Busqueda">
</header>
<body background="Fondos/producto.jpg">
	<button class="botons" onclick="location.href='catalogo.html'">Atras</button>
	<button class="botons" onclick="location.href='registro_producto2.php'">Registrar nuevo producto</button>
	<div class="table">
		<div class="table--titleP">Productos</div>
		<div class="table-producto">idproducto</div>
		<div class="table-producto">nombre</div>
		<div class="table-producto">descripcion</div>
		<div class="table-producto">categoria</div>
		<div class="table-producto">cantidad</div>
		<div class="table-producto">proveedor</div>
		<div class="table-producto">precio</div>
		<div class="table-producto">costo</div>
		<div class="table-producto">fechacad</div>
		<?php
		$sql="SELECT * FROM producto";
		$resultado=mysqli_query($conexion,$sql);
		
		while($mostrar=mysqli_fetch_array($resultado)){ ?>
		<div class="table-prod"><?php echo $mostrar["idproducto"];?></div>
		<div class="table-prod"><?php echo $mostrar["nombre"];?></div>
		<div class="table-prod"><?php echo $mostrar["descripcion"];?></div>
		<div class="table-prod"><?php echo $mostrar["categoria"];?></div>
		<div class="table-prod"><?php echo $mostrar["cantidad"];?></div>
		<div class="table-prod"><?php echo $mostrar["proveedor"];?></div>
		<div class="table-prod"><?php echo $mostrar["precio"];?></div>
		<div class="table-prod"><?php echo $mostrar["costo"];?></div>
		<div class="table-prod"><?php echo $mostrar["fechacad"];?></div>
		<?php }?>
	</div>
</body>
</html>