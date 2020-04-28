<?php
extract($_REQUEST);
$data=unserialize($data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Editar todos los Datos</title>
	<link rel="stylesheet" type="text/css" href="menu.css">
</head>
<body>
<div class="edit">
<br>
<form action="PersonasControlador.php" method="post" name="registro">
<div class="edit">
<table align="center">
	<tr>
		<td colspan="2">Editar los Datos:</td>
	</tr>
	<tr>
				<td>Nombre:</td><td><input type="text" name="nombre" id="nombre" placeholder="Ej: el consejo" title="Ingrese nombre de su religion" value="<?=$data[1]?>"></td>
			</tr>
			<tr>
				<td>libro:</td><td><input type="text" name="libro" id="libro" placeholder="Ej: Biblia" title="Ingrese el tipo de libro" value="<?=$data[2]?>"></td>
			</tr>
			<tr>
				<td>Profeta</td><td><input type="text" name="profeta" id="profeta" placeholder="Ej: Mahoma" title="Nombre del Profeta " value="<?=$data[3]?>"></td>
			</tr>
			<tr>
				<td>Origen:</td><td><input type="text" name="origen" id="origen" placeholder="Ej: El Tibet" title="Ingrese su origen" value="<?=$data[4]?>"></td>
			</tr>
			<tr>
				<td>Ano de Iniciacion:</td><td><input type="numb" name="anio_inicio" id="anio_inicio" placeholder="300 A.C." title="300 A.C." value="<?=$data[5]?>"></td>
			</tr>
			<tr>
		<td>
		<input type="hidden" name="id_religiones" value="<?=$data[0]?>">
		<input type="hidden" name="operacion" value="actualizar">
		<input type="submit" name="enviar" value="Enviar"></td>
	</tr>
	</div>
</table>
</form>
</div>
</body>
</html>