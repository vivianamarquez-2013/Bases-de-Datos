<html>
<head>
	<title>Insercción de importes en</title>
</head>
<body>
<form>
	<center><td colspan='2' align='center'><h1><font color="red">Adicionar clientes</h1></font></td></center>
	<table align='center' width='225' cellspacing='2' cellpadding='2' border='0'>	
</form>
<form>
<left><td colspan='2' align='left'><h3>Cliente insertado</h3></td></left>
<table align='left' width='100' cellspacing='2' cellpadding='2' border='0'>
</form>

<?php
$v_cod_cliente=$_GET["cod_cliente"];
$v_nom_cliente="'".$_GET["nom_cliente"]."'";

$conexion = pg_connect("host=192.168.6.55 port=5432 dbname=ventas user=postgres password=1234") or die('failed');

$sql="INSERT INTO cliente(cod_cliente, nom_cliente) VALUES($v_cod_cliente, $v_nom_cliente)";
$result = pg_Exec($conexion,$sql);
$sql= "select cod_cliente, nom_cliente from cliente where cod_cliente = $v_cod_cliente";
$result=pg_Exec($conexion,$sql);
while($row=pg_fetch_array($result)){
echo $row["cod_cliente"]."-->".$row["nom_cliente"];
}

echo"<br>";
?>
<form method='get' action='opciones.php'>
<br>
	<input type='submit' value='Close'>
</form>
</body>
</html>
