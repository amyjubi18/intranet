<?php

if(!empty($_POST)){
	if(isset($_POST["Usuarios"]) &&isset($_POST["NombreCompleto"]) &&isset($_POST["email"]) &&isset($_POST["Clave"]) &&isset($_POST["IdPermisos"])){
		if($_POST["Usuarios"]!=""&& $_POST["email"]!=""&&$_POST["Clave"]!=""){
			include "conexion.php";
			
			$sql = "insert into usuario(Usuarios,NombreCompleto,email,Clave,IdPermisos,Fecha) VALUE (\"$_POST[Usuarios]\",\"$_POST[NombreCompleto]\",\"$_POST[email]\",\"$_POST[Clave]\",\"$_POST[IdPermisos]\",NOW())";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='../editar-usuario.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='../editar-usuario.php';</script>";

			}
		}
	}
}



?>