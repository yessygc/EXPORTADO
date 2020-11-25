<?php
$conexion=mysqli_connect('localhost', 'root', '', 'basewyji');
if(!$conexion){
	echo 'error en la base de datos';
}else{
	echo 'conectado';
}
$nombre=$_POST["nombre"];
$descripcion=$_POST["descripcion"];
$categoria=$_POST["categoria"];
$cantidad=$_POST["cantidad"];
$proveedor=$_POST["proveedor"];
$precio=$_POST["precio"];
$costo=$_POST["costo"];
$fechacad=$_POST["fechacad"];

$insertar="INSERT INTO producto( nombre, descripcion, categoria, cantidad, proveedor, precio, costo, fechacad)
VALUES('$nombre','$descripcion','$categoria','$cantidad','$proveedor','$precio','$costo','$fechacad')";

$ejecutar=mysqli_query($conexion,$insertar);
if($ejecutar){
echo"<script>alert('se ha registrado el usuario con exito'); window.location='tabla_producto.php'</script>";
}else{
echo"<script>alert('no se puedo registrar');window.history.go(-1);</script>";
}
?>