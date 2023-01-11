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
    <div class=" max-w-fit	p-8 my-10 sm:p-4 ">
            <h1 class="text-center text-5xl	 ">Archivos</h1>

            <div class=" max-w-fit	p-8 my-6  border-4 ">
<form class="w-full max-w-sm m-auto w-50 mt-4 mb-2"  >
    <!-- <form action="" method="POST" class="flex mt-2 sm:mt-8 sm:flex sm:justify-center lg:justify-start  ">
        <input class="flex border-4 border-blue-400 w-fit p-3 rounded-lg " type="search" placeholder="Buscar" name="campo" id="campo" required><br>
          <button class="w-32 font-medium flex bg-blue-700 justify-center content-center ml-8 p-4 text-xl text-white rounded-lg  hover:bg-blue-800 focus:ring-4 focus:ring-blue-300" type="submit" name="enviar" > Buscar</button>  
         <input name="buscar" type="hidden" class="form-control mb-2" id="inlineFormInput" value="v">
    </form>
 -->
 <div class="flex space-x-2 justify-center">
 <span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline ">

<button class="text-lg flex inline-block  justify-start focus:outline-none rounded text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-800"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"></path></svg><a href="archivo-empleados.php">Cargar Archivos</a></button>

</span>
<span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline rounded">
<label for="buscar" class="ml-2  text-gray-700 mt-2 text-2xl">Buscar: </label>
<input name="buscar" type="hidden" class="form-control mb-2" id="inlineFormInput" value="v">
</span>
<span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline  rounded">
    
<input type="text" name="curso" id="buscar" class="border-4 border-blue-400 ml-2 mt-2 rounded-lg px-4 py-2 focus:border-blue-500">
<span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline  rounded">
    
<input type="submit" value="Buscar" id="boton_buscar" class="text-lg flex inline-block  justify-start focus:outline-none rounded text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-800">
</span>

                    </div>



</form>

<?php
include('../php/conexion.php');

if ($con->connect_error) {
    die("la conexión ha fallado: " . $con->connect_error);
}

if(isset($_GET["curso"])){
$pbu=$_GET["curso"];	
	}
	
if(isset($_GET["buscar"])){               
    
$sqln = mysqli_query($con,"SELECT t1.IdArchivo, t1.name, t1.description, t1.ruta, t1.tipo, t1.fecha, t2.Categoria, t2.IdCategoria FROM archivo t1 INNER JOIN categoria t2  ON t1.IdCategoria = t2.IdCategoria WHERE (t1.name LIKE '%$pbu%') OR (t1.description LIKE '%$pbu%') OR (t1.ruta LIKE '%$pbu%') OR (t1.fecha LIKE '%$pbu%') OR (t2.Categoria LIKE '%$pbu%') order by t1.IdArchivo desc");

}
?>
    
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
            

            if (isset($_GET["buscar"])) {
                $contador=0;
                while ($datos = mysqli_fetch_assoc($sqln)) {
                    $contador++;
                    $ruta ="./acciones/".$datos['ruta'];
                    
echo"<tr class='py-3 px-8 border border-4 border-blue-400'>";
echo"<tbody class='text-center'>";
echo"<th class='py-3 px-8 border border-4 border-blue-400' scope='row'>".$contador."</th>";
echo"<td class='py-3 px-8 border border-4 border-blue-400'>".$datos['name']."</td>";
 echo"<td class='py-3 px-8 border border-4 border-blue-400'>".$datos['description']."</td>";
echo"<td class='py-3 px-8 border border-4 border-blue-400'>".$datos['ruta']."</td>";
echo"<td class='py-3 px-8 border border-4 border-blue-400'>".$datos['fecha']."</td>";
echo"<td class='py-3 px-8 border border-4 border-blue-400'>".$datos['Categoria']."</td>";
echo "<td class=' border-2 border-blue-400 text-center py-4'><a class='focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800' style='margin-left: 0.5rem;' target='_blank' href=' $ruta'>Visualizar</a></td>";
echo"</tr>";
echo"  </tbody>";

            
                }
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