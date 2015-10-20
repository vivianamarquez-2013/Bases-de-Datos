<!DOCTYPE html>
<html>
<head>
	<title>Conexion Exitosa</title>
</head>

<body>
<h1>Bienvenido</h1>
<?PHP 
/*Conexion con la base de datos*/
$v_usuario = $_POST["username"];
$v_password = $_POST["password"];
$v_tabla = $_POST["tabla"];
$conexion = pg_connect("host=localhost port=5432 dbname=ventas user=$v_usuario password=$v_password");
echo "Datos de la tabla $v_tabla";
echo "<BR>";
if ($v_tabla == "factura") {
	$sql = "select * from $v_tabla";
	$resultado_set = pg_Exec($conexion, $sql);
while ($row= pg_fetch_array($resultado_set)) {
	echo $row["cod_factura"]."--->".$row["nom_factura"]."--->".$row["val_factura"];
	echo "<BR>";
}

};

if ($v_tabla == "cliente") {
	$sql = "select * from $v_tabla";
	$resultado_set = pg_Exec($conexion, $sql);
while ($row= pg_fetch_array($resultado_set)) {
	echo $row["cod_cliente"]."--->".$row["nom_cliente"];
	echo "<BR>";
}

};
if ($v_tabla == "vendedor") {
	$sql = "select * from $v_tabla";
	$resultado_set = pg_Exec($conexion, $sql);
while ($row= pg_fetch_array($resultado_set)) {
	echo $row["cod_vendedor"]."--->".$row["nom_vendedor"]."--->".$row["tel_vendedor"];
	echo "<BR>";
}

};

pg_close($conexion);
?>
</body>
</html>
