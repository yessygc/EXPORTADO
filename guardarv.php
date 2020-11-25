<?php
$conexion=mysqli_connect('localhost', 'root', '', 'basewyji');
if(!$conexion){
	echo 'error en la base de datos';
}else{
	echo 'conectado';
}
$empleado=$_POST["empleado"];
$nombreproducto=$_POST["nombreproducto"];
$precioproducto=$_POST["precioproducto"];
$cantidad=$_POST["cantidad"];
$fecha=$_POST["fecha"];
$total=$_POST["total"];

$insertar="INSERT INTO venta( empleado, nombreproducto, precioproducto, cantidad, fecha, total)
VALUES('$empleado','$nombreproducto','$precioproducto','$cantidad','$fecha','$total')";

$ejecutar=mysqli_query($conexion,$insertar);
if($ejecutar){
echo"<script>alert('se ha registrado el usuario con exito'); window.location='principal.php'</script>";
}else{
echo"<script>alert('no se puedo registrar');window.history.go(-1);</script>";
}
?>