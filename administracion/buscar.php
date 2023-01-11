<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar</title>
</head>
<body>
<div class=" max-w-fit	p-8 my-10 sm:p-4 ">
            <h1 class="text-center text-5xl	 ">Archivos</h1>

            <div class=" max-w-fit	p-8 my-6  border-4 ">

<form class=" w-full max-w-sm m-auto w-50 mt-4 mb-2 " action="./buscar.php" method="POST" enctype="multipart/form-data">
            
            
            <div class="flex space-x-2 justify-center">
            <!-- <span class="text-xs inline-block py-1 px-5 leading-none text-center whitespace-nowrap align-baseline ">

            <label for="num_registros" class=" text-gray-700  mt-2 text-2xl	">Mostrar: </label>

            </span>
            <span class="text-lg inline-block  py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline ">
                
            <select name="num_registros" id="num_registros" class=" ml-2 w-fit bg-white mt-2 border-4 border-blue-400  rounded-lg cursor-pointer hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight">
                        <option class="px-4 py-3 pr-8 hover:bg-gray-200 hover:px-2" value="10">10</option>
                        <option class="px-4 py-3 pr-8 hover:bg-gray-200 hover:px-2" value="25">25</option>
                        <option class="px-4 py-3 pr-8 hover:bg-gray-200 hover:px-2" value="50">50</option>
                        <option class="px-4 py-3 pr-8 hover:bg-gray-200 hover:px-2" value="100">100</option>
                    </select>
            </span>-->
            <span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline ">

            <button class="text-lg flex inline-block  justify-start focus:outline-none rounded text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-800"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"></path></svg><a href="archivo-empleados.php">Cargar Archivos</a></button>

            </span>
            <span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline rounded">
            <label for="buscar" class="ml-2  text-gray-700 mt-2 text-2xl">Buscar: </label>
            </span>
            <span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline  rounded">
                
            <input type="text" name="buscar" id="buscar" class="border-4 border-blue-400 ml-2 mt-2 rounded-lg px-4 py-2 focus:border-blue-500">
            <span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline  rounded">
                
            <input type="submit" value="Buscar" id="boton_buscar" class="text-lg flex inline-block  justify-start focus:outline-none rounded text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-800">
            </span>
            
                                </div>
            </form>


  
    <br>
    <div id="contenedor-tab">
    <table id="tabla" class='w-full text-gray-800 dark:text-gray-400 border-solid border-gray-600 sm:p-4'>
        <thead class='text-xs text-gray-700 uppercase bg-blue-200 dark:bg-gray-700 dark:text-gray-400'>
        <tr class=" border-4 border-blue-400">
            <th scope='col' class=' border-4 border-blue-400 py-4 px-6 text-center'>#</th>
            <th scope='col' class=' border-4 border-blue-400 py-4 px-6 text-center'>Número del Expediente</th>
            <th scope='col' class=' border-4 border-blue-400 py-4 px-6 text-center'>Descripción</th>
            <th scope='col' class=' border-4 border-blue-400 py-4 px-6 text-center'>Archivo</th>
            <th scope='col' class=' border-4 border-blue-400 py-4 px-6 text-center'>Fecha</th>
            <th scope='col' class=' border-4 border-blue-400 py-4 px-6 text-center'>Categoría</th>
            <th scope='col' class='py-4 px-6 text-center'>Acciones</th>

        </tr>
        </thead>
            
            <?php
            
            ?>
            
            <?php
                $buscar = '';
                $buscar = ($_POST['buscar']);
                include("../php/conexion.php");
                $sql = "SELECT archivo.IdArchivo, archivo.name, archivo.description, archivo.ruta, archivo.tipo, archivo.fecha, categoria.Categoria, categoria.IdCategoria FROM archivo, categoria WHERE (archivo.IdCategoria = categoria.IdCategoria) like '$buscar' '%' order by IdArchivo";
                $rta = mysqli_query($con, $sql);
                while ($mostrar = mysqli_fetch_row($rta)) {
                    $ruta ="./acciones/".$mostrar[3];
                    ?>
                    <tr>
                        <td><?php echo $mostrar[0] ?></td>
                        <td><?php echo $mostrar[1] ?></td>
                        <td><?php echo $mostrar[2] ?></td>
                        <td><?php echo $mostrar[3] ?></td>
                        <td><?php echo $mostrar[5] ?></td>
                        <td><?php echo $mostrar[6] ?></td>
                        <td class="py-3 px-8 border border-4 border-blue-400"><a class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" target="_blank"  href="<?php echo $ruta;?>">Visualizar</a></td>
                        <td>
                            
                        </td>
                    </tr>
                <?php
                }
                ?>
        </table>
    </div>
</body>
</html>