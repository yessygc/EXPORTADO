<?php
$conexion=mysqli_connect('localhost', 'root', '', 'basewyji');
if(!$conexion){
	echo 'error en la base de datos';
}else{
	echo 'conectado';
}
$nombre=$_POST["nombre"];
$apepat=$_POST["apepat"];
$apemat=$_POST["apemat"];
$nacimiento=$_POST["fechanacimiento"];
$sexo=$_POST["sexo"];
$correo=$_POST["correo"];
$telefono=$_POST["telefono"];
$direccion=$_POST["direccion"];
$poblacion=$_POST["poblacion"];
$usuarioe=$_POST["usuarioe"];
$contraseña=$_POST["contraseña"];
$rol=$_POST["rol"];

$insertar="INSERT INTO empleado(nombre, apepat, apemat, fechanacimiento, sexo, correo, telefono, direccion, poblacion, usuarioe, contraseña, rol)
VALUES('$nombre','$apepat','$apemat','$nacimiento','$sexo','$correo','$telefono','$direccion','$poblacion','$usuarioe','$contraseña','$rol')";

$ejecutar=mysqli_query($conexion,$insertar);
if($ejecutar){
echo"<script>alert('se ha registrado el usuario con exito'); window.location='tabla_empleado.php'</script>";
}else{
echo"<script>alert('no se puedo registrar');window.history.go(-1);</script>";
}
?>
