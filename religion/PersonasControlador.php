<link rel="stylesheet" type="text/css" href="menu.css">

<?php
include("clasedb.php");
extract($_REQUEST);

class PersonasControlador
{

//Registrar los datos//
public function registro()
{

	extract($_REQUEST);

	$db=new clasedb();
	$con=$db->conectar();
	$sql="INSERT INTO religion VALUES(NULL,'".$nombre."','".$libro."','".$profeta."','".$origen."','".$anio_inicio."')";
	$resultado=mysqli_query($con,$sql);
	if ($resultado) {
		?>
	<div class="alert1"><b>Registrado ---> <a href="index.php">Volver</a></b></div>
	<?php
	}else{
	?>
	<div class="alert2"><b>No Registrado ---> <a href="index.php">Volver</a></b></div>
	<?php
	}

}

//Modificaciones//
public function modificar()
{
	extract($_REQUEST);
	$db=new clasedb();
	$conex=$db->conectar();

	$sql="SELECT * FROM religion WHERE id=".$id_religiones."";
	$res=mysqli_query($conex,$sql);
	$data=mysqli_fetch_array($res);

	header("Location:editar_datos.php?data=".serialize($data));
}

//hacer actualizaciones//
 public function actualizar(){
	extract($_REQUEST);
	$db=new clasedb();
	$conex=$db->conectar();
		$sql="UPDATE religion SET nombre='".$nombre."',libro='".$libro."',profeta='".$profeta."',origen='".$origen."',anio_inicio='".$anio_inicio."' WHERE id=".$id_religiones;
		$res=mysqli_query($conex,$sql);
			if ($res){
				?>
				<script type="text/javascript">
						alert("EXITO AL MODIFICAR");
						window.location="PersonasControlador.php?operacion=index";
						</script>
					<?php
			}else{
				?>
					<script type="text/javascript">
						alert("ERROR AL MODIFICAR REGISTRO");
						window.location="PersonasControlador.php?operacion=index";
					</script>
				<?php
				}
	
}


//consultar//
	public function index(){
		$db=new clasedb();
		$conex=$db->conectar();
		
		$sql="SELECT * FROM religion";
		
		$res=mysqli_query($conex,$sql);
		$campos=mysqli_num_fields($res);
		$filas=mysqli_num_rows($res);
		$i=0;
		$datos[]=array();
		
		while($data=mysqli_fetch_array($res)){
			for ($j=0; $j < $campos ; $j++){
				$datos[$i][$j]=$data[$j];
			}
			$i++;
		} 
		mysqli_close($conex);
			header("Location:consulta.php?filas=".$filas."&campos=".$campos."&data=".serialize($datos));
	}

//---------------------------Eliminar-----------------------------------//
public function eliminar()
{
	extract($_REQUEST);
	$db=new clasedb();
	$conex=$db->conectar();

	$sql="DELETE FROM religion WHERE id=".$id_religiones;

		$res=mysqli_query($conex,$sql);
		if ($res) {
			?>
				<script type="text/javascript">
					alert("REGISTRO ELIMINADO");
					window.location="PersonasControlador.php?operacion=index";
				</script>
			<?php 
		} else{
			?>
				<script type="text/javascript">
					alert("REGISTRO NO ELIMINADO");
					window.location="PersonasControlador.php?operacion=index";
				</script>
			<?php
		}
}

//---------------------------Funciones-----------------------------------//
	static function controlador($operacion){
		$religiones=new PersonasControlador();
	switch($operacion){
		case 'index':
			$religiones->index();
			break;
		case 'registro':
			$religiones->registro();
			break;
		case 'modificar':
			$religiones->modificar();
			break;
		case 'actualizar':
			$religiones->actualizar();
			break;
		case 'eliminar':
			$religiones->eliminar();
			break;
		default:
			?>
				<script type="text/javascript">
					alert("No existe la ruta");
					window.location="PersonasControlador.php?operacion=index";
				</script>
			<?php
			break;
		}
	}
}

PersonasControlador::controlador($operacion);
	
?>
