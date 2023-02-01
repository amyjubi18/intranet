<?php

session_start();
error_reporting(0);

$validar = $_SESSION['Usuarios'];

if( $validar == null || $validar = ''){

    header("Location: ../includes/login.php");
    die();
    

}





$IdUsuarios= $_GET['IdUsuarios'];
$conexion= mysqli_connect("localhost", "root", "", "intranet");
/* $consulta= "SELECT usuario.IdUsuarios, usuario.Usuarios, usuario.email, usuario.Clave, usuario.NombreCompleto,
usuario.Fecha, permisos.Gerencias FROM usuario
LEFT JOIN permisos ON usuario.IdPermisos = permisos.IdPermisos WHERE IdUsuarios = $IdUsuarios"; */
$consulta= "SELECT * FROM usuario LEFT JOIN permisos ON usuario.IdPermisos = permisos.IdPermisos  WHERE IdUsuarios = $IdUsuarios";

$resultado = mysqli_query($conexion, $consulta);
$usuario = mysqli_fetch_assoc($resultado);

?>


<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">

    <title>Editar Usuario</title>


</head>

<body class="bg-fixed bg-center bg-no-repeat bg-cover pb-2" style="background-image: url(../img/fondo.jpg)">
    <img src="../img/cinti.jpg"  class="img-responsive" width="100%" height="100%">
    <section class="justify-center md:flex-row h-screen items-center py-1">
	
<div class="mt-2">
        </div>
        <div class="bg-white items-center p-3 rounded-lg justify-center  flex md:mx-auto md:mx-0 md:max-w-md lg:max-w-full w-full md:w-1/2 xl:w-1/3 px-6 lg:px-16 xl:px-12 snap-none">
            <div class="w-full h-100 mb-1 touch-none">
                <h1 class="text-4xl font-bold text-center py-3 pb-0 text-blue-900">Intranet</h1>
                <h1 class="text-2xl font-bold text-center leading-tight mt-3">Editar Usuario</h1>


<form  action="../includes/_functions.php" class="mt-o" method="POST">
<div id="login"class="mt-0" >
            <div class="mt-1">
                            <label for="Usuarios" class="block text-gray-700">Usuario:</label>
                            <input type="text"  id="Usuarios" name="Usuarios" class="w-full bg-gray-200 mt-2 border focus:border-blue-900 focus:bg-white focus:outline-none rounded-lg px-4 py-3" value="<?php echo $usuario['Usuarios'];?>"required>
                            </div>
                            <div class="mt-1">
                                <label for="username">Correo:</label><br>
                                <input type="email" name="email" id="email" class="w-full bg-gray-200 mt-2 border focus:border-blue-900 focus:bg-white focus:outline-none rounded-lg px-4 py-3" placeholder="" value="<?php echo $usuario['email'];?>">
                            </div>
                            <div class="mt-1">
                                  <label for="NombreCompleto" class="form-label">Nombre Completo:</label>
                                <input type="tel"  id="NombreCompleto" name="NombreCompleto" class="w-full bg-gray-200 mt-2 border focus:border-blue-900 focus:bg-white focus:outline-none rounded-lg px-4 py-3" value="<?php echo $usuario['NombreCompleto'];?>" required>
                                
                            </div>
                            <div class="mt-1">
                                <label for="Clave">Contraseña:</label>
                                <input type="text" name="Clave" id="Clave" class="w-full bg-gray-200 mt-2 border focus:border-blue-900 focus:bg-white focus:outline-none rounded-lg px-4 py-3" value="<?php echo $usuario['Clave'];?>" required>
                             
                            </div>

                            <div class="mt-1">
                                  <label for="IdPermisos" class="form-label">Gerencias:</label>
                                




                            <select class="block  w-full bg-white mt-2 border border-gray-200 hover:border-gray-500 px-4 py-3 pr-8 rounded shadow leading-tight " name="IdPermisos" id="IdPermisos" >
                    <option class="px-4 py-3 pr-8 hover:bg-gray-200 hover:px-2" value="<?php echo $usuario['IdPermisos'];?>"><?php echo  $usuario['Gerencias'];?></option>
                       <?php
                        include("../includes/_db.php");
                        $consulta = "SELECT * FROM permisos";
                        
                        $ejecutar = mysqli_query($conexion, $consulta);
                        while($row = mysqli_fetch_array($ejecutar)){
                            $IdPermisos = $row['IdPermisos'];
                            $permiso =$row['Gerencias'];
                        echo "<option value = '".$IdPermisos."' >".$permiso."</option>";

                        }
                        ?> 
                        
                    </select>  



                                  <input type="hidden" name="accion" value="editar_registro">
                                <input type="hidden" name="IdUsuarios" value="<?php echo $IdUsuarios;?>">
                            </div>
                        
                           <br>

                           <div class="flex space-x-2 justify-center">
    <span class="text-xs inline-block px-2.5 leading-none text-center whitespace-nowrap align-middle ">
                                    
                                <button type="submit" class="text-lg flex inline-block  justify-start focus:outline-none rounded text-white bg-blue-900 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-800"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="m16 2.012 3 3L16.713 7.3l-3-3zM4 14v3h3l8.299-8.287-3-3zm0 6h16v2H4z"></path></svg>Editar</button>
                                </span>
                                <span class="text-xs inline-block px-2.5 leading-none text-center whitespace-nowrap align-middle ">
                               <a href="usuarios.php" class="text-lg flex inline-block  justify-start focus:outline-none rounded text-white bg-blue-900 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-800"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z"></path></svg>Regresar</a>
                                </span>
                               
                            </div>
                            </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>