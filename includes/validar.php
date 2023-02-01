<?php
$conexion= mysqli_connect("localhost", "root", "", "intranet");

if(isset($_POST['registrar'])){

    if(strlen($_POST['Usuarios']) >=1 && strlen($_POST['email'])  >=1 && strlen($_POST['NombreCompleto'])  >=1 
    && strlen($_POST['Clave'])  >=1 && strlen($_POST['IdPermisos']) >= 1 ){

    $Usuarios = trim($_POST['Usuarios']);
    $email = trim($_POST['email']);
    $NombreCompleto = trim($_POST['NombreCompleto']);
    $Clave = trim($_POST['Clave']);
    $IdPermisos = trim($_POST['IdPermisos']);

    $consulta= "INSERT INTO usuario (Usuarios, email, NombreCompleto, Clave, IdPermisos)
    VALUES ('$Usuarios', '$email','$NombreCompleto','$Clave', '$IdPermisos' )";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);

    header('Location: ../_gtic/usuarios.php');
  }
}









?>