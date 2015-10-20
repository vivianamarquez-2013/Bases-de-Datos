<!DOCTYPE html>
<html>
<head>
	<title>Conexión Exitosa</title>
</head>

<body>
<font color="hotpink"><h1>Bienvenid@</h1></font>
<?PHP 
/*Conexion con la base de datos*/
header("Content-type: text/html; charset=utf8");
$v_usuario = $_POST["username"];
$v_password = $_POST["password"];
$v_tabla = $_POST["tabla"];
$conexion = pg_connect("host=localhost port=5432 dbname=eventos user=$v_usuario password=$v_password");
echo "Datos de la tabla <b>$v_tabla</b>";
echo "<BR>";
echo "<BR>";
if ($v_tabla == "evento") {
	$sql = "select * from $v_tabla";
	$resultado_set = pg_Exec($conexion, $sql);
while ($row= pg_fetch_array($resultado_set)) {
	echo $row["cod_evento"].". <i>Nombre evento: </i>".$row["nom_evento"]." <i>Fecha: </i>".$row["fecha_evento"]." <i>Participantes: </i>".$row["num_part_evento"]." <i>Lugar: </i>".$row["lug_evento"];
	echo "<BR>";
}
};
pg_close($conexion);
?>
</body>
</html>
