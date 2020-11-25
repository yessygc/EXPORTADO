<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="estilo.css">
  <title>Registro del empleado</title>
</head>
<header>
  <h1>WYJI</h1>
  <div style="text-align: right"><img src="ofer.png" class="imagen" /></div>
</header>
<body background="Fondos/este.jpg">
	<button class="botons" onclick="location.href='tabla_empleado.php'">Atras</button>
  <section class="form-register">
    <h4>Registro empleado</h4>
    <form action="guardar.php" method="POST"  >
    <input class="controls" type="text" name="nombre" id="nombres" placeholder="Ingrese su Nombre" required>
    <input class="controls" type="text" name="apepat" id="apellidos" placeholder="Ingrese su Apellido Paterno" required>
    <input class="controls" type="text" name="apemat" id="apellidos" placeholder="Ingrese su Apellido Materno" required>
    <h3>Fecha de nacimiento</h3>
      <input class="controls" type=date name=fechanacimiento required>
    <h3>Sexo</h3>
      <select class="controls" name="sexo">
                  <option value=Hombre>Hombre
                  <option value=Mujer>Mujer
      </select>
    <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo" required>
    <input class="controls" type=tel name=telefono placeholder="telefono" required>						
    <input class="controls" type=text name=direccion placeholder="direccion" required>
    <input class="controls" type="text" name="poblacion" placeholder="poblacion" required>
    <input class="controls" type="text" name="usuarioe" id="usuario" placeholder="usuario" required>
    <input class="controls" type="password" name="contraseña" id="contraseña" placeholder="Ingresa contraseña" required>
    <h3>Rol</h3>
      <select class="controls" name="rol">
                  <option value=Admi>1=Admistrador
                  <option value=Empleado>2=Empleado
      </select>
    
  
    
    <input class="botons" type="submit" value="Registrar">
    <button class="botons" onclick="location.href='tabla_empleado.php'">Cancelar</button>
    </form>  
  </section>

</body>
</html>