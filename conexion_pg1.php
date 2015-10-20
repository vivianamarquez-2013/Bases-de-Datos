<html>
<head>
<title>Ejemplo de Conexión de PHP con PostgreSQL</title>
</head>
<body>
<h1><font color="red"><b>Ejemplo de Conexión de PHP con PostgreSQL</b></font></h1>
<br>
<?php
/* Conexión con la base de datos */
$conexion=pg_connect("host=localhost port=5432 dbname=ventas user=postgres password=1234");
$sql="select * from factura";
$resultado_set=pg_Exec($conexion, $sql);
while($row=pg_fetch_array($resultado_set)){
	echo $row["cod_factura"]."-->".$row["nom_factura"].$row["val_factura"];
	echo "<br>";
}
pg_close($conexion);
?>
</body>
</html>
