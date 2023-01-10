<?php

if(!empty($_POST)){
	if(isset($_POST["Usuarios"]) &&isset($_POST["NombreCompleto"]) &&isset($_POST["email"]) &&isset($_POST["Clave"]) &&isset($_POST["IdPermisos"])){
		if($_POST["Usuarios"]!=""&& $_POST["NombreCompleto"]!=""&&$_POST["email"]!=""&&$_POST["Clave"]!=""&&$_POST["IdPermisos"]!=""){
			include "conexion.php";
			
			$sql = "update usuario set Usuarios=\"$_POST[Usuarios]\",NombreCompleto=\"$_POST[NombreCompleto]\",email=\"$_POST[email]\",Clave=\"$_POST[Clave]\",IdPermisos=\"$_POST[IdPermisos]\" where IdUsuarios=".$_POST["IdUsuarios"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../editar-usuario.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../editar-usuario.php';</script>";

			}
		}
	}
}



?>