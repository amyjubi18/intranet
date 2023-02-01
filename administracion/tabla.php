
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
<h1 class="text-center text-5xl	 ">Archivos</h1>
<form class="w-full max-w-sm m-auto w-50 mt-4 mb-2" action="./tabla-final.php" >
   
 <div class="flex space-x-2 justify-center">

 <span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline ">

<button class="text-lg flex inline-block  justify-start focus:outline-none rounded text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-800"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"></path></svg><a href="archivo-empleados.php">Cargar Archivos</a></button>

</span>
<span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline rounded">
<label for="buscar" class="ml-2  text-gray-700 mt-4  text-2xl">Buscar: </label>
<input name="buscar" type="hidden" class="form-control mb-2" id="inlineFormInput" value="v">
</span>

<span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline  rounded">
    
<input type="text" name="curso" id="buscar" class="border-4 text-base border-blue-400 ml-2 mt-2 rounded-lg px-4 py-2 focus:border-blue-500">
</span>
<span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline  rounded">
    
<input type="submit" value="Buscar" id="boton_buscar" class="text-base mt-2 flex inline-block  justify-start focus:outline-none rounded text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 mr-1 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-800">
</span>

                    </div>



</form>



<form class="w-full max-w-sm m-auto w-50 mt-4 mb-2" method="POST">
   
 <div class="flex space-x-2 justify-center">
 
<span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline rounded">
    
<label for="buscar" class="ml-2  text-gray-700 mt-2 text-base">  Fecha a Consultar: </label>

<input name="desde" id="desde" type="date"  class="border-4 text-base border-blue-400 ml-2 mt-2 rounded-lg px-4 py-2 focus:border-blue-500">
<span class="text-xs inline-block py-1 px-2 leading-none text-center whitespace-nowrap align-baseline rounded">
    <p class="text-lg"> Hasta </p>
</span>
<input name="hasta" id="hasta" type="date"  class="border-4 text-base border-blue-400 ml-2 mt-2 rounded-lg px-4 py-2 focus:border-blue-500">
</span>
<span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline rounded">


<button name="search" class="text-base mt-3 flex inline-block   justify-start focus:outline-none rounded text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-3 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-800"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M19.023 16.977a35.13 35.13 0 0 1-1.367-1.384c-.372-.378-.596-.653-.596-.653l-2.8-1.337A6.962 6.962 0 0 0 16 9c0-3.859-3.14-7-7-7S2 5.141 2 9s3.14 7 7 7c1.763 0 3.37-.66 4.603-1.739l1.337 2.8s.275.224.653.596c.387.363.896.854 1.384 1.367l1.358 1.392.604.646 2.121-2.121-.646-.604c-.379-.372-.885-.866-1.391-1.36zM9 14c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z"></path></svg></button>
</span> 

<span class="text-xs inline-block py-1 leading-none text-center whitespace-nowrap align-baseline rounded">


<button  class="text-base mt-3 flex inline-block   justify-start focus:outline-none rounded text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-3 py-2.5  mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-800"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M10 11H7.101l.001-.009a4.956 4.956 0 0 1 .752-1.787 5.054 5.054 0 0 1 2.2-1.811c.302-.128.617-.226.938-.291a5.078 5.078 0 0 1 2.018 0 4.978 4.978 0 0 1 2.525 1.361l1.416-1.412a7.036 7.036 0 0 0-2.224-1.501 6.921 6.921 0 0 0-1.315-.408 7.079 7.079 0 0 0-2.819 0 6.94 6.94 0 0 0-1.316.409 7.04 7.04 0 0 0-3.08 2.534 6.978 6.978 0 0 0-1.054 2.505c-.028.135-.043.273-.063.41H2l4 4 4-4zm4 2h2.899l-.001.008a4.976 4.976 0 0 1-2.103 3.138 4.943 4.943 0 0 1-1.787.752 5.073 5.073 0 0 1-2.017 0 4.956 4.956 0 0 1-1.787-.752 5.072 5.072 0 0 1-.74-.61L7.05 16.95a7.032 7.032 0 0 0 2.225 1.5c.424.18.867.317 1.315.408a7.07 7.07 0 0 0 2.818 0 7.031 7.031 0 0 0 4.395-2.945 6.974 6.974 0 0 0 1.053-2.503c.027-.135.043-.273.063-.41H22l-4-4-4 4z"></path></svg><a href="tabla.php"></a></button>
</span> 
                    </div>

</form> 





    
    <br><br>
    <div class="overflow-x-auto">
    <table id="tabla" class='w-full text-gray-800 dark:text-gray-400 border-solid border-gray-600 sm:p-4' >
        <thead class='text-xs text-gray-700 uppercase bg-blue-200 dark:bg-gray-700 dark:text-gray-400'>
        <tr class="font-bold border-4 border-blue-900 text-center py-4 border-4 border-blue-900">
            <th scope='col' class=' border-4 border-blue-900 py-4 px-6 text-center'>#</th>
            <th scope='col' class=' border-4 border-blue-900 py-4 px-6 text-center'>Número del Expediente</th>
            <th scope='col' class=' border-4 border-blue-900 py-4 px-6 text-center'>Descripción</th>
            <th scope='col' class=' border-4 border-blue-900 py-4 px-6 text-center'>Archivo</th>
            <th scope='col' class=' border-4 border-blue-900 py-4 px-6 text-center'>Fecha</th>
            <th scope='col' class=' border-4 border-blue-900 py-4 px-6 text-center'>Categoría</th>
            <th scope='col' class='border -4 border-blue-900 py-4 px-6 text-center'>Acciones</th>

        </tr>
        </thead>
        <tbody>
            <!-- <?php
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
                <td class=' border-2 border-blue-400 text-center py-4' ><?php echo $ruta;?></td>
                <td class='border-2 border-blue-400 text-center py-4'><?php echo $fecha;?></td>
                <td class='border-2 border-blue-400 text-center py-4'><?php echo $categoria1;?></td>
                <td class='border-2 border-blue-400 text-center py-4'><a class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" style='margin-left: 0.5rem;' target="_blank" href="<?php echo "./documentos/" . $ruta;?>">Visualizar</a></td>
            </tr>
            <?php
             }
             ?> -->
<?php include 'fecha.php'?>	
        </tbody>
        <tbody id="content">

        </tbody>
    </table>
    
    </div>
</div>
    </div>






</body>
</html>