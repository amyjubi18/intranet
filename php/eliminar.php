<?php

if(!empty($_GET)){
	include 'conexion.php';
			
			$sql = "DELETE FROM usuario WHERE IdUsuarios=".$_GET["IdUsuarios"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Eliminado exitosamente.\");window.location='../editar-usuario.php';</script>";
			}else{
				print "<script>alert(\"No se pudo eliminar.\");window.location='../editar-usuario.php';</script>";

			}
}

?>

