<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="estilo.css">
  <title>Registro Proveedor</title>
</head>
<header>
	<h1>WYJI</h1>
	<div style="text-align: right"><img src="ofer.png" class="imagen" /></div>
</header>
<body background="Fondos/este.jpg">
	<button class="botons" onclick="location.href='tabla_proveedor.php'">Atras</button>
  <section class="form-register">
    <h4>Registrar Proveedor</h4>
    <form action="guardarpr.php" method="POST"  >
      <input class="controls" type="text" name="nombre" placeholder="Ingrese su Nombre" required>
      <input class="controls" type="text" name="apepat" placeholder="Ingrese su Apellido Paterno" required>
	    <input class="controls" type="text" name="apemat" placeholder="Ingrese su Apellido Materno" required>
      <input class="controls" type="tel" name="telefono"  placeholder="Telefono Proveedor" required>
      <input class="controls" type="text" name="empresa" placeholder="Empresa" required>
      <input class="controls" type="tel" name="telefonoempresa" placeholder="Telefono Empresa" required>
      <input class="controls" type="text" name="correoempresa" placeholder="Correo electronico de la empresa"required>
      <h3>Entrega</h3>
      <input class="controls" type=date name=fechaentrega>
      <input class="controls" type="text" name="Direccion" placeholder="Direccion Empresa" required>

      <input class="botons" type="submit" value="Registrar">
      <button class="botons" onclick="location.href='tabla_proveedor.php'">Cancelar</button>
    </form>
  </section>

</body>
</html>