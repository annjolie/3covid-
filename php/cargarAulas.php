<?php 
    require("conexion.php");
	$consulta = "SELECT * 
                 FROM aulas";
	$saida = array();
	if ($datos = $conexion->query($consulta)) {   		
		while ($alumno = $datos->fetch_object()) {
			$saida[] = $alumno;
		}
		$datos->close();
	}
	$conexion->close();
	echo json_encode($saida);
?>