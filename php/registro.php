<?php

if(!empty($_POST)){
	if(isset($_POST["Usuarios"]) &&isset($_POST["NombreCompleto"]) &&isset($_POST["email"]) &&isset($_POST["Clave"]) &&isset($_POST["confirm_password"]) &&isset($_POST["IdPermisos"])){
		if($_POST["Usuarios"]!=""&& $_POST["NombreCompleto"]!=""&&$_POST["email"]!=""&&$_POST["Clave"]!=""&&$_POST["IdPermisos"]!=""&&$_POST["Clave"]==$_POST["confirm_password"]){
			
			
			include "conexion.php";
			
			$found=false;
			$sql1= "select * from usuario where Usuarios=\"$_POST[Usuarios]\" or email=\"$_POST[email]\"";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Nombre de usuario o email ya estan registrados.\");window.location='../registro.php';</script>";
			}
			$sql = "insert into usuario(Usuarios,NombreCompleto,email,Clave,IdPermisos,Fecha) VALUE (\"$_POST[Usuarios]\",\"$_POST[NombreCompleto]\",\"$_POST[email]\",\"$_POST[Clave]\",\"$_POST[IdPermisos]\",NOW())";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro exitoso. \");window.location='/intranet/_gtic/usuarios.php';</script>";
			}
		}
	}
}



?>