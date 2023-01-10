<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">

</head>
<body>
    <br>

    <div class=" max-w-fit	p-8 my-10 sm:p-4  ">
<div class=" max-w-fit	p-8 my-6  border-4 ">
<form class="flex mt-2 sm:mt-8 sm:flex sm:justify-center lg:justify-start  mr-2 "  >
    <form action="" method="POST" class="flex mt-2 sm:mt-8 sm:flex sm:justify-center lg:justify-start  ">
        <input class="flex border-4 border-blue-400 w-fit p-3 rounded-lg " type="search" placeholder="Buscar" name="campo" id="campo" required><br>
         <button class="w-32 font-medium flex bg-blue-700 justify-center content-center ml-8 p-4 text-xl text-white rounded-lg  hover:bg-blue-800 focus:ring-4 focus:ring-blue-300" type="submit" name="enviar" > Buscar</button> 
    </form>

</form>


    <form class="m-auto w-50 mt-4 mb-2 " action="" method="POST" enctype="multipart/form-data">
        

        <div class="mb-2">
            
            
            
        <button class="text-lg flex focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring--800"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"></path></svg><a href="archivo-empleados.php">Cargar Archivos
            </a></button>
            </div>

    </form>
    <br><br>
    <div class="overflow-x-auto">
    <table id="tabla" class='w-full text-gray-800 dark:text-gray-400 border-solid border-gray-600 sm:p-4' >
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
        <tbody>
            <?php
            include 'config/bd.php';
            $conexion = conexion();
            $query = listar($conexion); 
            $numero = mysqli_num_rows($query);
            $contador=0;
            while($datos=mysqli_fetch_assoc($query)){
                $contador++;
                $id = $datos['IdArchivo'];
                $nombre = $datos['name'];
                $descripcion = $datos['description'];
                $ruta = $datos['ruta'];
                $fecha = $datos['fecha'];
                $idcategoria = $datos['IdCategoria'];
                $categoria1 = $datos['Categoria'];
                $tipo = $datos['tipo'];
                
            ?>
            <tr class='py-3 px-6 border border-4 border-blue-400'>
                <td class='border-2 border-blue-400 text-center py-4'><?php echo $contador;?></td>
                <td class=' border-2 border-blue-400 text-center py-4'><?php echo $nombre;?></td>
                <td class='border-2 border-blue-400 text-center py-4'><?php echo $descripcion;?></td>
                <td class=' border-2 border-blue-400 text-center py-4'><?php echo $ruta;?></td>
                <td class='border-2 border-blue-400 text-center py-4'><?php echo $fecha;?></td>
                <td class='border-2 border-blue-400 text-center py-4'><?php echo $categoria1;?></td>
                <td class='border-2 border-blue-400 text-center py-4'><a class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800'" target="_blank" href="<?php echo "./acciones/" . $ruta;?>">Visualizar</a></td>
            </tr>
            <?php
             }
             ?>
        </tbody>
        <tbody id="content">

        </tbody>
    </table>
    
    </div>
</div>
    </div>






</body>
</html>