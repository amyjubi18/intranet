<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
   

<!-- CSS only -->

    <title>Modificar</title>
</head>
<body>
<div class=" max-w-fit	p-8 my-10 ">
<div class=" max-w-fit	p-8 my-10  border-4">
<form class="flex w-full items-center mt-2 sm:mt-8 sm:flex sm:justify-center lg:justify-start">   
    <label for="simple-search" class="sr-only">Buscar</label>
    <div class="relative w-44">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-auto">
            
        </div>
        <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar" required>
    </div>
    <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        <span class="sr-only">Search</span>
    </button>
    <button class=" w-44 bg-blue-900 mx-10 px-4 py-2 rounded-lg font-semibold text-white  hover:bg-blue-800">
    <a href="../registro.php">INGRESAR NUEVO USUARIO</a>    
    </button>
</form>
<div class="overflow-x-auto relative  space-y-0 sm:rounded-lg my-4">
<?php
include "conexion.php";
$consultar = "SELECT usuario.IdUsuarios, usuario.Usuarios, usuario.NombreCompleto, usuario.email, usuario.Clave, permisos.Gerencias, permisos.IdPermisos FROM usuario, permisos WHERE (usuario.IdPermisos = permisos.IdPermisos)  order by IdUsuarios ";
if($resultado = mysqli_query($con, $consultar)){
    if(mysqli_num_rows($resultado) > 0){
        echo "<table class='w-full text-gray-800 dark:text-gray-400 border-solid border-gray-600' >";
        echo "<thead class='text-xs text-gray-700 uppercase bg-blue-200 dark:bg-gray-700 dark:text-gray-400'>";
        echo "<tr>";
        echo "<th scope='col' class='py-3 px-6 text-center'>ID</th>";
        echo "<th scope='col' class='py-3 px-6 text-center'>USUARIO</th>";
        echo "<th scope='col' class='py-3 px-6 text-center'>NOMBRE Y APELLIDO</th>";
        echo "<th scope='col' class='py-3 px-6 text-center'>CORREO ELECTÓNICO</th>";
        echo "<th scope='col' class='py-3 px-6 text-center'>CONTRASEÑA</th>";
        echo "<th scope='col' class='py-3 px-6 text-center'>GERENCIA</th>";
        echo "<th colspan='2' scope='col' class='py-3 px-6 text-center'>OPCIONES</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        while($filas= mysqli_fetch_array($resultado))
{
    echo "<tr class='py-3 px-6'>";
    echo "<tbody >";
    echo "<td  class='py-6 px-6 text-center'>".$filas ['IdUsuarios']."</b>"."</td>";
        echo "<td class='text-center' >".$filas ['Usuarios']."</td>";
        echo "<td class='text-center'>".$filas ['NombreCompleto']."</td>";
        echo "<td class='text-center'>".$filas ['email']."</td>";
        echo "<td class= 'text-center'>". $filas ['Clave']. "</td>";
        echo "<td class='text-center'>".$filas ['Gerencias']."</td>";
        
        echo "<td colspan='2' scope='col'  class='py-3 px-6 text-center'>";
        echo "<a href='./modificar-usuario.php?IdUsuarios=".$filas['IdUsuarios']."'> <buttom type= 'buttom' class='focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800'> Modificar </buttom> </a>";
      
        echo " <a href='./eliminar.php?IdUsuarios=".$filas['IdUsuarios']."'> <buttom type= 'buttom' class='focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900'> Eliminar </buttom> </a>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    mysqli_free_result($resultado);
} else{
    echo 'No records were found.';
}
} else{
echo "Oops! Something went wrong. Please try again later.";
}

// Close connection
mysqli_close($con);
?>
</div>
</div>
</div>
</div>
</body>
</html>