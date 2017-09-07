<?php

$conexion = mysql_connect('localhost', 'root', 'babyobrien')
    or die('No se pudo conectar: ' . mysql_error());
echo 'Connected successfully';

mysqli_select_db($conexion, "Dorian") or die('Problemas en la selección de la base de datos');
$fecha=($_POST['fecha']);
$clave=($_POST['clave']);
$nombre=($_POST['nombre']);
$precioc=($_POST['precioc']);
$preciov=($_POST['preciov']);
$cantidad=($_POST['cantidad']);

mysql_query =( "INSERT INTO compra (fecha,idproducto,nombre,preciocompra,precioventa,cantidad)
 VALUES ('$fecha','$clave','$nombre','$precioc','$preciov','$cantidad')",$conexion);

?>