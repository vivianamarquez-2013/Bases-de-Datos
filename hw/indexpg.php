<html>
<head>
	<title>Conexión de PHP con PostgreSQL</title>
</head>
<body>
	<?php header("Content-type: text/html; charset=utf8"); ?>
	<center><td colspan="2" align="center"><font color="hotpink"><h1>Conexión de PHP con PostgreSQL</h1></font></td></center>
	<form action="conectar.php" method="POST">
		<table align="center" width="225" cellspacing="2" border="0">
			<tr>
				<td colspan="2" align="center" bgcolor="turquoise">Login</td>
			</tr>
			<tr><td> </td></tr>
			<tr>
			<td align="right">Username: </td>
			<td><input type="text" name="username" size="14" maxlength="50"></td>
			</tr>
			<tr>
			<td align="right">Password: </td>
			<td><input type="password" name="password" size="14" maxlength="50"></td>
			</tr>
			<tr>
				<td align="right">Table: </td>
				<td><input type="text" name="tabla" size="14" maxlength="50"></td>
			</tr>
			<tr>
			<br>
			<td colspan="2" align="center"><input type="Submit" value="Send"></td>
			</tr>
		</table>
