<?php
extract($_REQUEST);
$data=unserialize($data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Editando Personas</title>
</head>
<body>
	<form action="PersonasControlador.php" method="post" name="formulario">
		<table>
			<tr>
				<td colspan="2">Formlario</td>
			</tr>
			<tr>
				<td>Nombres:</td><td><input type="text" name="nombres" id="nombres" placeholder="Ej: Martin Jose" title="Ingrese sus Nombres" value="<?=$data[1]?>"></td>
			</tr>
			<tr>
				<td>Apellidos:</td><td><input type="text" name="apellidos" id="apellidos" placeholder="Ej: Perez Salcedo" title="Ingrese sus Apellidos" value="<?=$data[2]?>"></td>
			</tr>
			<tr>
				<td>cedula:</td><td><input type="number" name="cedula" id="cedula" placeholder="Ej: 12345678" title="Ingrese sus cedula" value="<?=$data[3]?>"></td>
			</tr>
			<tr>
				<td>
					<input type="hidden" name="id_persona" value="<?=$data[0]?>">
					<input type="hidden" name="operacion" value="actualizar">
					<input type="submit" name="enviar" value="Modificar"></td>
			</tr>
		</table>
	</form>
</body>
</html>