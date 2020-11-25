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
  <title>Corte de caja</title>
</head>
<header>
	<h1>WYJI</h1>
	<div style="text-align: right"><img src="ofer.png" class="imagen" /></div>
	<input  class="controls" type="search" name="busqueda" id="busqueda" placeholder="Busqueda">
</header>

<body background="Fondos/monedas2.jpg">
	<button class="botons" onclick="location.href='principal.php'">Atras</button>
	
	<div class="table">
		<div class="table--titleCo">Corte de caja</div>
		<div class="table-corte">fecha</div>
		<div class="table-corte">dineroinicial </div>
		<div class="table-corte">totalingresos</div>
		<?php 
		$sql= "SELECT * FROM cortecaja";
		$resultado=mysqli_query($conexion,$sql);
		
		while($mostrar=mysqli_fetch_array($resultado)){ ?>
		<div class="table-cort"><?php echo $mostrar["fecha"];?></div>
		<div class="table-cort"><?php echo $mostrar["dineroinicial"];?></div>
		<div class="table-cort"><?php echo $mostrar["totalingresos"];?></div>
		<?php }?>
	</div>
</body>
</html>