<html>
<head>
	<title>Insercción de importes en</title>
</head>
<body>
<form>
	<center><td colspan='2' align='center'><h1><font color="hotpink">Adicionar Eventos</h1></font></td></center>
	<table align='center' width='225' cellspacing='2' cellpadding='2' border='0'>	
</form>
<form>
<left><td colspan='2' align='left'><h3>Evento insertado</h3></td></left>
<table align='left' width='100' cellspacing='2' cellpadding='2' border='0'>
</form>

<?php
header("Content-type: text/html; charset=utf8");
$v_cod_evento=$_GET["cod_evento"];
$v_nom_evento="'".$_GET["nom_evento"]."'";
$v_fecha_evento=$_GET["fecha_evento"];
$v_num_part_evento=$_GET["num_part_evento"];
$v_lug_evento="'".$_GET["lug_evento"]."'";

$conexion = pg_connect("host=localhost port=5432 dbname=eventos user=postgres password=1234") or die('failed');

$sql="INSERT INTO evento(cod_evento, nom_evento, fecha_evento, num_part_evento, lug_evento) VALUES($v_cod_evento, $v_nom_evento, $v_fecha_evento, $v_num_part_evento, $v_lug_evento)";
$result = pg_Exec($conexion,$sql);
$sql= "select cod_evento, nom_evento, fecha_evento, num_part_evento, lug_evento from evento where cod_evento = $v_cod_evento";
$result=pg_Exec($conexion,$sql);
while($row=pg_fetch_array($result)){
echo $row["cod_evento"].". <i>Nombre evento: </i>".$row["nom_evento"]." <i>Fecha: </i>".$row["fecha_evento"]." <i>Participantes: </i>".$row["num_part_evento"]." <i>Lugar: </i>".$row["lug_evento"];
}

echo"<br>";
?>
<form method='get' action='opciones.php'>
<br>
	<input type='submit' value='Close'>
</form>
</body>
</html>
