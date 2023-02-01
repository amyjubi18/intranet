<?php
   
require_once ("_db.php");




if (isset($_POST['accion'])){ 
    switch ($_POST['accion']){
        //casos de registros
        case 'editar_registro':
            editar_registro();
            break; 

            case 'eliminar_registro';
            eliminar_registro();
    
            break;

            case 'acceso_user';
            acceso_user();
            break;


		}
        

	}



    if (isset($_POST['accion2'])){ 
        switch ($_POST['accion2']){
            //casos de registros
            /* case 'editar_documento':
                editar_documento();
                break;  */
    
                case 'eliminar_documento';
                eliminar_documento();
        
                break;

    
    
            }
            
    
        }

    function editar_registro() {
		$conexion=mysqli_connect("localhost","root","","intranet");
		extract($_POST);
		$consulta="UPDATE usuario SET Usuarios = '$Usuarios', email = '$email', NombreCompleto = '$NombreCompleto',
		Clave ='$Clave', IdPermisos = '$IdPermisos' WHERE IdUsuarios = '$IdUsuarios' ";

		mysqli_query($conexion, $consulta);


		header('Location: ../_gtic/usuarios.php');

}

function eliminar_registro() {
    $conexion=mysqli_connect("localhost","root","","intranet");
    extract($_POST);
    $IdUsuarios= $_POST['IdUsuarios'];
    $consulta= "DELETE FROM usuario WHERE IdUsuarios= $IdUsuarios";

    mysqli_query($conexion, $consulta);


    header('Location: ../_gtic/usuarios.php');

}

function acceso_user() {
    $Usuarios=$_POST['Usuarios'];
    $Clave=$_POST['Clave'];
    session_start();
    $_SESSION['Usuarios']=$Usuarios;

    $conexion=mysqli_connect("localhost","root","","intranet");
    $consulta= "SELECT * FROM usuario WHERE Usuarios='$Usuarios' AND Clave='$Clave'";
    $resultado=mysqli_query($conexion, $consulta);
    $filas=mysqli_fetch_array($resultado);


    if($filas['IdPermisos'] == 4){ //gerente adminis

        header('Location: \intranet\administracion\gerentes\index.php');

    }else if($filas['IdPermisos'] == 1){//gtic
        header('Location: ../_gtic/index.php');
      
    
    }else if($filas['IdPermisos'] == 2){//administrador
        header('Location: \intranet\administracion\empleados\index.php');
    }
    
    
    else{
        print "<script>alert(\"Acceso invalido.\");window.location='./login.php';</script>";
        session_destroy();

    }

  
}
/* function editar_documento() {
    $conexion=mysqli_connect("localhost","root","","intranet");
    extract($_POST);


    $consulta="UPDATE  archivo  SET name= '$name', description='$description',fecha='$fecha',IdCategoria='$IdCategoria' WHERE IdArchivo ='$IdArchivo'";

    mysqli_query($conexion, $consulta);


    header('Location: /administracion/gerentes/documentos.php');

} */

function eliminar_documento() {
    $conexion=mysqli_connect("localhost","root","","intranet");
    extract($_POST);
    $IdArchivo= $_POST['IdArchivo'];

    $consulta= "DELETE FROM archivo WHERE IdArchivo= $IdArchivo";

    mysqli_query($conexion, $consulta);


    header('Location: intranet/administracion/gerentes/documentos.php');

}




