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
  <title>Principal</title>
</head>
<header>
	<h1>WYJI</h1>
	<div style="text-align: right"><img src="ofer.png" class="imagen" /></div>
	<input  class="controls" type="search" name="busqueda" id="busqueda" placeholder="Busqueda">
</header>
<body background="Fondos/monedas2.jpg">
	
	<button class="botons" onclick="location.href='catalogo.html'">Mas...</button>
	<button class="botons" onclick="location.href='cortedecaja.php'">Corte de Caja</button>
	<div class="table">
		<div class="table--titleOf">Oferton</div>
		<div class="table-oferton">idventa</div>
		<div class="table-oferton">empleado</div>
		<div class="table-oferton">nombreproducto</div>
		<div class="table-oferton">precioproducto</div>
		<div class="table-oferton">cantidad</div>
		<div class="table-oferton">fecha</div>
		<div class="table-oferton">total</div>
		<?php 
		$sql= "SELECT * FROM venta";
		$resultado=mysqli_query($conexion,$sql);
		
		while($mostrar=mysqli_fetch_array($resultado)){ ?>
		<div class="table-ofer"><?php echo $mostrar["idventa"];?></div>
		<div class="table-ofer"><?php echo $mostrar["empleado"];?></div>
		<div class="table-ofer"><?php echo $mostrar["nombreproducto"];?></div>
		<div class="table-ofer"><?php echo $mostrar["precioproducto"];?></div>
		<div class="table-ofer"><?php echo $mostrar["cantidad"];?></div>
		<div class="table-ofer"><?php echo $mostrar["fecha"];?></div>
		<div class="table-ofer"><?php echo $mostrar["total"];?></div>
		<?php }?>
	</div>
	<section class="form-register">
		<button align="right" class="botons" onclick="location.href='confirmar.html'">OK</button>
		<button class="botons" onclick="location.href='Registrar_venta.php'">Registrar nueva venta</button>
	</section>
</body>
</html>