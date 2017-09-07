<?php

$conexion = mysql_connect('localhost', 'root', 'babyobrien')
    or die('No se pudo conectar: ' . mysql_error());
echo 'Connected successfully';

mysqli_select_db($conexion, "dorian") or die('Problemas en la selección de la base de datos');
$nombre=($_POST['nombre']);
$apellidop=($_POST['apellidop']);
$apellidom=($_POST['apellidom']);
$calle=($_POST['calle']);
$colonia=($_POST['colonia']);
$municipio=($_POST['municipio']);
$estado=($_POST['estado']);
$tel=($_POST['tel']);
$cp=($_POST['cp']);

mysql_query = ("INSERT INTO cliente (NOMBRE, APELLIDOP, APELLIDOM, CALLE, COLONIA, MUNICIPIO, ESTADO, TELEFONO, CP)
 VALUES ('$nombre','$apellidop','$apellidom','$calle','$colonia','$municipio','$estado','$cp','$tel')",$conexion);

?>

