<?php


$conexion = mysql_connect("localhost", "root", "babyobrien")
    or die('No se pudo conectar: ' . mysql_error());
echo 'Connected successfully';


mysql_select_db("Dorian", $conexion) or die('Problemas en la selección de la base de datos');
$usuario=($_POST['usuario']);


$result = mysql_query("SELECT * FROM venta WHERE fecha = '".$fecha."'") ;


echo "
	<table border = 1 cellspacing = 1 cellpadding = 1>
		<tr>
			<th>Fecha</th>
            <th>ID</th>
			<th>Nombre</th>
			<th>Cantidad</th>
			
		</tr>";
while($row = mysql_fetch_array($result)){
	echo "
		<tr>
        
       
			<td>".$row[0]."</td>
			<td>".$row[1]."</td>
			<td>".$row[2]."</td>
			<td>".$row[3]."</td>
		</tr>";
}
echo "</table>";


?>
