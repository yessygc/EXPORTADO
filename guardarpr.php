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
$telefono=$_POST["telefono"];
$empresa=$_POST["empresa"];
$telefonoempresa=$_POST["telefonoempresa"];
$correo=$_POST["correoempresa"];
$fechaentrega=$_POST["fechaentrega"];
$direccion=$_POST["direccion"];

$insertar="INSERT INTO proveedor(nombre, apepat, apemat, telefono, empresa, telefonoempresa, correoempresa, fechaentrega, direccion)
VALUES('$nombre','$apepat','$apemat','$telefono','$empresa','$telefonoempresa','$correo','$fechaentrega','$direccion')";

$ejecutar=mysqli_query($conexion,$insertar);
if($ejecutar){
echo"<script>alert('se ha registrado el usuario con exito'); window.location='tabla_proveedor.php'</script>";
}else{
echo"<script>alert('no se puedo registrar');window.history.go(-1);</script>";
}
?>