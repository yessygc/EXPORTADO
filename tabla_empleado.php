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
  <title>Tabla Empleados</title>
</head>
<header>
	<h1>WYJI</h1>
	<div style="text-align: right"><img src="ofer.png" class="imagen" /></div>
	<input  class="controls" type="search" name="busqueda" id="busqueda" placeholder="Busqueda">
</header>

<body background="Fondos/monedas2.jpg">
	<button class="botons" onclick="location.href='catalogo.html'">Atras</button>
	<button class="botons" onclick="location.href='Registro de empleado.php'">Registrar nuevo empleado</button>
	<div class="table">
		<div class="table--titleE">Empleados</div>
		<div class="table-empleado">Idempleado </div>
		<div class="table-empleado">nombre </div>
		<div class="table-empleado">apepat </div>
		<div class="table-empleado">apemat </div>
		<div class="table-empleado">fechanacimiento </div>
		<div class="table-empleado">sexo </div>
		<div class="table-empleado">correo </div>
		<div class="table-empleado">telefono </div>
		<div class="table-empleado">direccion </div>
		<div class="table-empleado">poblacion </div>
		<div class="table-empleado">usuarioe </div>
		<div class="table-empleado">contraseña </div>
		<div class="table-empleado">pasadmin </div>
		<div class="table-empleado">rol </div>
		<?php 
		$sql= "SELECT * FROM empleado";
		$resultado=mysqli_query($conexion,$sql);
		
		while($mostrar=mysqli_fetch_array($resultado)){ ?>
		<div class="table-empl"><?php echo $mostrar["idempleado"];?></div>
		<div class="table-empl"><?php echo $mostrar["nombre"];?></div>
		<div class="table-empl"><?php echo $mostrar["apepat"];?></div>
		<div class="table-empl"><?php echo $mostrar["apemat"];?></div>
		<div class="table-empl"><?php echo $mostrar["fechanacimiento"];?></div>
		<div class="table-empl"><?php echo $mostrar["sexo"];?></div>
		<div class="table-empl"><?php echo $mostrar["correo"];?></div>
		<div class="table-empl"><?php echo $mostrar["telefono"];?></div>
		<div class="table-empl"><?php echo $mostrar["direccion"];?></div>
		<div class="table-empl"><?php echo $mostrar["poblacion"];?></div>
		<div class="table-empl"><?php echo $mostrar["usuarioe"];?></div>
		<div class="table-empl"><?php echo $mostrar["contraseña"];?></div>
		<div class="table-empl"><?php echo $mostrar["pasadmin"];?></div>
		<div class="table-empl"><?php echo $mostrar["rol"];?></div>
		<?php }?>
	</div>
</body>
</html>