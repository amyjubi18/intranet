
<?php

session_start();
error_reporting(0);

$validar = $_SESSION['Usuarios'];

if( $validar == null || $validar = ''){

  header("Location: ./includes/login.php");
  die();
  
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title> Registro</title>
</head>

<body class=" bg-center bg-no-repeat bg-cover" style="background-image: url(./img/fondo-registro.jpg)">
<?php include ("./menu.php");?>
    <section class="justify-center md:flex-row h-screen items-center py-1">
	
<div class="mt-1">
        </div>
        <div class="bg-white items-center p-3 rounded-lg justify-center  flex md:mx-auto md:mx-0 md:max-w-md lg:max-w-full w-full md:w-1/2 xl:w-1/3 px-6 lg:px-16 xl:px-12 snap-none">
            <div class="w-full h-100 mb-1 touch-none">
                <h1 class="text-4xl font-bold text-center py-3 pb-0 text-blue-900">Intranet</h1>
                <h1 class="text-2xl font-bold text-center leading-tight mt-3">Registro</h1>
                <form role="form" name="registro" class="mt-0" action="php/registro.php" method="POST">
                <div class="mt-1">
                        <label for="Usuarios" class="block text-gray-700">Nombre de Usuario:</label>
                        <input type="text" placeholder="Ingresa el Nombre de Usuario" class="w-full bg-gray-200 mt-2 border focus:border-blue-900 focus:bg-white focus:outline-none rounded-lg px-4 py-3" id="Usuarios" name="Usuarios" autocomplete autofocus required>
                    </div>
                    <div class="mt-1">
                        <label class="block text-gray-700" for="NombreCompleto">Nombre y Apellido:</label>
                        <input type="text" placeholder="Ingresa el Nombre y Apellido" class="w-full bg-gray-200 mt-2 border focus:border-blue-900 focus:bg-white focus:outline-none rounded-lg px-4 py-3" autocomplete autofocus required name="NombreCompleto" id="NombreCompleto">
                    </div>
                    
                    <div class="mt-1">
                        <label class="block text-gray-700" for="email">Correo Electónico:</label>
                        <input type="email" placeholder="Ingresa el Correo" class="w-full bg-gray-200 mt-2 border focus:border-blue-900 focus:bg-white focus:outline-none rounded-lg px-4 py-3" autocomplete autofocus required name="email" id="email">
                    </div>
                    
                    <div class="justify-center h-sreen mt-1">
                        <label class="block text-gray-700" for="Clave">Contraseña:</label>
                        <input type="password" minlength="6" placeholder="Ingresa la Contraseña" class="w-full bg-gray-200 mt-2 border focus:border-blue-900 focus:bg-white focus:outline-none rounded-lg px-4 py-3" required id="Clave" name="Clave">
                    </div>
					<div class="justify-center h-sreen mt-1">
                        <label class="block text-gray-700" for="confirm_password">Repetir Contraseña:</label>
                        <input type="password" minlength="6" placeholder="Ingresa Nuevamente la Contraseña" class="w-full bg-gray-200 mt-2 border focus:border-blue-900 focus:bg-white focus:outline-none rounded-lg px-4 py-3" required id="confirm_password" name="confirm_password">
                    </div>
                    
                    <div class="justify-center h-sreen mt-1">
                    <label for="permisos" class="block text-gray-700">Gerencia: </label>
                    <select class="block  w-full bg-white mt-2 border border-gray-200 hover:border-gray-500 px-4 py-3 pr-8 rounded shadow leading-tight " name="IdPermisos" id="IdPermisos" >
                    <option class="px-4 py-3 pr-8 hover:bg-gray-200 hover:px-2" value="0">Seleccione la Gerencia</option>
                       <?php
                        include("php/conexion.php");
                        $consulta = "SELECT * FROM permisos";
                        
                        $ejecutar = mysqli_query($con, $consulta);
                        while($row = mysqli_fetch_array($ejecutar)){
                            $id_permisos = $row['IdPermisos'];
                            $permiso =$row['Gerencias'];
                        echo "<option value = '".$id_permisos."' >".$permiso."</option>";

                        }
                        ?> 
                        
                    </select>  

                    
                    </div>
                    
					
                    
					
        		

                <div class="mt-3 flex space-x-2 justify-center">
    <span class="text-xs inline-block px-2.5 leading-none text-center whitespace-nowrap align-middle ">
                                    
                <button type="submit" class="text-lg flex inline-block  justify-start focus:outline-none rounded text-white bg-blue-900 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-800"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M19 8h-2v3h-3v2h3v3h2v-3h3v-2h-3zM4 8a3.91 3.91 0 0 0 4 4 3.91 3.91 0 0 0 4-4 3.91 3.91 0 0 0-4-4 3.91 3.91 0 0 0-4 4zm6 0a1.91 1.91 0 0 1-2 2 1.91 1.91 0 0 1-2-2 1.91 1.91 0 0 1 2-2 1.91 1.91 0 0 1 2 2zM4 18a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3v1h2v-1a5 5 0 0 0-5-5H7a5 5 0 0 0-5 5v1h2z"></path></svg>Registrar</button>
                </span>
                <span class="text-xs inline-block px-2.5 leading-none text-center whitespace-nowrap align-middle ">
                <a href="./_gtic/index.php" class="text-lg flex inline-block  justify-start focus:outline-none rounded text-white bg-blue-900 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-800"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z"></path></svg>Regresar</a>
                </span>
                               
                            </div>
                    </div>



    </section>
	<script type="text/javascript">
function Limpiar() {
var t = document.getElementById("f").getElementsByTagName("submit");
for (var i=0; i<t.length; i++) {
    t[i].value = "";
    }
}
</script>
	<script src="./js/valida_registro.js"></script>
</body>

</html>