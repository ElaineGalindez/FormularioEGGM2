<?php
include('clasedb.php');

extract($_REQUEST);
//echo $nombre. "-".$apellido."-"$cedula;
$db=new clasedb();
$con=$db->conectar();
$sql="INSERT INTO datos_personales VALUES(NULL,".$nombres."','".$apellidos."','".$cedula."')";
$resultado=mysqli_query($con,$sql); 

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
if ($resultado) {
	?>
	<b>registro ingresado ---> <a href="index.php">volver</a></b>
	<?php
}else{
	?>
	<b>registro no ingresado  ---> <a href="index.php">volver</a></b>
	<?php
}
?>
</body>
</html>