<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
function phpMailer($email, $Usuarios){
	require_once('vendor/PHPMailer-master/src/Exception.php');
	require_once('vendor/PHPMailer-master/src/PHPMailer.php');
	require_once('vendor/PHPMailer-master/src/SMTP.php');

	$mail=new PHPMailer(true);
	try{
		$mail->SMTPDebug = 2;
		$mail->isSMTP();
		$mail->Host = 'in-v3.mailjet.com';
		$mail->SMTPAuth= true;
		$mail->Username= 'cba3b8eaab27d1f784a98d23f112495f';
		$mail->Password= '';
		$mail->SMTPSecure= 'tls';
		$mail->Port= 587;

		$mail->setFrom('agarcia@codecyt.gob.ve', 'intranet.com');
		$mail->addAddress($email, $Usuarios);

		$mail->isHTML(true);
		$mail->Subject ='Bienvenido a la intranet';
		$mail->Body= "Gracias por registrarte";
		$mail->AltBody= "Gracias por registrarte";
		$mail->send();

}catch(Exception $e){
	echo "Error al enviar el correo".$mail->ErrorInfo;
}}

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
				print "<script>alert(\"Registro exitoso. Proceda a Iniciar Sesión\");window.location='../login.php';</script>";
				$_SESSION['Usuarios']=$Usuarios;
				phpMailer($email, $Usuarios);
			}
		}
	}
}



?>