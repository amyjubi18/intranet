<?php

if(!empty($_POST)){
	if(isset($_POST["Usuarios"]) &&isset($_POST["Clave"])){
		if($_POST["Usuarios"]!=""&&$_POST["Clave"]!=""){
			include "conexion.php";
			
			$user_id=null;
			
			$sql1= "select * from usuario where (Usuarios=\"$_POST[Usuarios]\" or email=\"$_POST[Usuarios]\") and Clave=\"$_POST[Clave]\" ";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["IdUsuarios"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"Acceso invalido.\");window.location='../login.php';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				print "<script>window.location='../home.php';</script>";				
			}
		}
	}
}



?>