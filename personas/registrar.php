<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body>
	<form action="PersonasControlador.php" method="post" name="formulario">
		<table>
			<tr>
				<td colspan="2">Formlario</td>
			</tr>
			<tr>
				<td>Nombres:</td><td><input type="text" name="nombres" id="nombres" placeholder="Ej: Martin Jose" title="Ingrese sus Nombres"></td>
			</tr>
			<tr>
				<td>Apellidos:</td><td><input type="text" name="apellidos" id="apellidos" placeholder="Ej: Perez Salcedo" title="Ingrese sus Apellidos"></td>
			</tr>
			<tr>
				<td>cedula:</td><td><input type="number" name="cedula" id="cedula" placeholder="Ej: 12345678" title="Ingrese sus cedula"></td>
			</tr>
			<tr>
				<td>
					<input type="hidden" name="operacion" value="guardar">
					<input type="submit" name="enviar" value="Guardar"></td>
			</tr>
			</tr>
		</table>
	</form>
</body>
</html>