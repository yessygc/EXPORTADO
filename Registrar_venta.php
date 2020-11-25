
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="estilo.css">
  <title>Registro venta</title>
</head>
<header>
	<h1>WYJI</h1>
	<div style="text-align: right"><img src="ofer.png" class="imagen" /></div>
</header>
<body background="Fondos/producto.jpg">
	<button class="botons" onclick="location.href='principal.php'">Atras</button>
  <section class="form-register">
	<h4>Registrar Venta</h4>
	<form action="guardarv.php" method="POST"  >
    <input class="controls" type="text" name="empleado"  placeholder="Empleado" required>
	<input class="controls" type="text" name="nombreproducto"  placeholder="producto" required>
	<input class="controls" type="number" name="precioproducto" placeholder="precio" required>
	<input class="controls" type="number" name="cantidad"  placeholder="cantidad" required>
	<td>Fecha de venta</td>
	<input class="controls" type=date name=fecha> 
	<input class="controls" type="number" name="total"  placeholder="total" required>
    
    <input class="botons" type="submit" value="Guardar">
	<button class="botons" onclick="location.href='principal.php'">Cancelar</button>
    </form>
  </section>

</body>
</html>