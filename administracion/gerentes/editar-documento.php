<?php

session_start();
error_reporting(0);

$validar = $_SESSION['Usuarios'];

if( $validar == null || $validar = ''){

    header("Location: ../includes/login.php");
    die();
    

}





$IdArchivo= $_GET['IdArchivo'];
$conexion= mysqli_connect("localhost", "root", "", "intranet");
$consulta= "SELECT archivo.IdArchivo, archivo.name, archivo.description, archivo.ruta, archivo.tipo,
archivo.size, archivo.fecha, categoria.IdCategoria, categoria.Categoria FROM archivo
LEFT JOIN categoria ON archivo.IdCategoria = categoria.IdCategoria WHERE IdArchivo = $IdArchivo";
$resultado = mysqli_query($conexion, $consulta);
$archivo = mysqli_fetch_assoc($resultado);
$ruta = $archivo['ruta'];
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
        <div class="bg-white items-center p-6 rounded-lg  flex md:mx-auto md:mx-0 md:max-w-md lg:max-w-7xl w-96 md:w-1/2 xl:w-2/5 px-6 lg:px-16 xl:px-12 snap-none">
            <div class="w-full  mb-1 touch-none">
                <h1 class="text-4xl font-bold text-center py-3 pb-0 text-blue-900">Intranet</h1>
                <h1 class="text-2xl font-bold text-center leading-tight mt-3">Editar Usuario</h1>


<form  action="/intranet/includes/_functions.php" class="mt-o" method="POST">
<div id="login"class="mt-0" >
            <div class="mt-1">
                            <label for="name" class="block text-gray-700">Número de Expediente:</label>
                            <input type="text"  id="name" name="name" class="w-full bg-gray-200 mt-2 border focus:border-blue-900 focus:bg-white focus:outline-none rounded-lg px-4 py-3" value="<?php echo $archivo['name'];?>"required>
                            </div>
                            <div class="mt-1">
                                <label for="description">Descripción:</label><br>
                                <input type="text" name="description" id="description" class="w-full bg-gray-200 mt-2 border focus:border-blue-900 focus:bg-white focus:outline-none rounded-lg px-4 py-3" placeholder="" value="<?php echo $archivo['description'];?>">
                            </div>
                            <div class="mt-1">
                                  <label for="ruta" class="form-label">Archivo:</label>
                                <input type="file"  id="ruta" name="ruta" class="w-full bg-gray-200 mt-2  focus:outline-none rounded-lg px-4 py-3 mb-2" size="150" accept=".jpg, .png, .jpeg, .pdf" maxlength="150" value="" >
                                <br>
                            <iframe class="border border-blue-900  justify-center" width="500" height="500"  src="<?php echo "../documentos/" . $ruta;?>" frameborder="0"></iframe>
                                
                            </div>
                            <div>
                            <label for="" class="block text-gray-700 mt-2">Fecha del Documento: </label>
                                <input type="date" class=" mt-3 border border-blue-900  rounded-lg cursor-pointer  text-gray-900 text-sm rounded-lg focus:ring-blue-900 focus:border-blue-500 block w-full pl-3 p-2.5  dark:bg-blue-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-900 dark:focus:border-blue-900"  name="fecha" size="100" maxlength="250" id="fecha" value="<?php echo $archivo['fecha'];?>" required>
                            </div>
                            
                            <div class="mt-1">
                                  <label for="IdCategoria" class="form-label">Categorías:</label>
                            
                            <select class="block  w-full bg-white mt-2 border border-gray-200 hover:border-gray-500 px-4 py-3 pr-8 rounded shadow leading-tight " name="IdPermisos" id="IdPermisos" >
                    <option class="px-4 py-3 pr-8 hover:bg-gray-200 hover:px-2" value="<?php echo $archivo['IdCategoria'], $archivo['Categoria'];?>"><?php echo $archivo['Categoria'];?></option>
                       <?php
                        include("../includes/_db.php");
                        $consulta = "SELECT * FROM categoria";
                        
                        $ejecutar = mysqli_query($conexion, $consulta);
                        while($row = mysqli_fetch_array($ejecutar)){
                            $IdCategoria = $row['IdCategoria'];
                            $Categoria =$row['Categoria'];
                        echo "<option value = '".$IdCategoria."' >".$Categoria."</option>";

                        }
                        ?> 
                        
                    </select>  


 
                                  <input type="hidden" name="accion2" value="editar_documento">
                                <input type="hidden" name="IdArchivo" value="<?php echo $IdArchivo;?>">
                            </div>
                        
                           <br>

                           <div class="flex space-x-2 justify-center">
    <span class="text-xs inline-block px-2.5 leading-none text-center whitespace-nowrap align-middle ">
                                    
                                <button type="submit" class="text-lg flex inline-block  justify-start focus:outline-none rounded text-white bg-blue-900 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-800"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="m16 2.012 3 3L16.713 7.3l-3-3zM4 14v3h3l8.299-8.287-3-3zm0 6h16v2H4z"></path></svg>Editar</button>
                                </span>
                                <span class="text-xs inline-block px-2.5 leading-none text-center whitespace-nowrap align-middle ">
                               <a href="documentos.php" class="text-lg flex inline-block  justify-start focus:outline-none rounded text-white bg-blue-900 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-800"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z"></path></svg>Regresar</a>
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