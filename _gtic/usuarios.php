<?php

session_start();
error_reporting(0);

$validar = $_SESSION['Usuarios'];

if( $validar == null || $validar = ''){

  header("Location: ../includes/login.php");
  die();
  
}


?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <title>Usuarios</title>
</head>
<body>
<?php include ("menu.php");?>

<br>
<div class=" max-w-fit	  sm:p-4  ">
<div class=" max-w-fit	p-8  pt-0 pb-2 ">
<h1 class="text-5xl font-bold text-center py-1 pb-0 text-blue-900">Lista de Usuarios</h1>
<br>


          <br>
          <br>
    <div class="flex space-x-2 justify-center">
    <span class="text-xs inline-block px-2.5 leading-none text-center whitespace-nowrap align-middle ">

<button class="text-lg flex inline-block  justify-start focus:outline-none rounded text-white bg-blue-900 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-800"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"  viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:; margin-right: 5px;"><path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"></path></svg><a href="/intranet/registro.php">Nuevo Usuario</a></button>

</span>

       <span class="text-xs inline-block px-2.5 leading-none text-center whitespace-nowrap align-baseline ">

       <a class="text-lg flex inline-block  justify-start focus:outline-none rounded text-white bg-blue-900 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-800" href="../includes/excel.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:; margin-right: 5px;"><path d="M18 22a2 2 0 0 0 2-2V8l-6-6H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12zM13 4l5 5h-5V4zM7 8h3v2H7V8zm0 4h10v2H7v-2zm0 4h10v2H7v-2z"></path></svg>Reporte en Excel
       </a>
       </span>
       <span class="text-xs inline-block px-2.5 leading-none text-center whitespace-nowrap align-baseline ">

       <a class="text-lg flex inline-block  justify-start focus:outline-none rounded text-white bg-blue-900 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-800" href="../includes/reporte.php" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;margin-right: 5px;"><path d="M8.267 14.68c-.184 0-.308.018-.372.036v1.178c.076.018.171.023.302.023.479 0 .774-.242.774-.651 0-.366-.254-.586-.704-.586zm3.487.012c-.2 0-.33.018-.407.036v2.61c.077.018.201.018.313.018.817.006 1.349-.444 1.349-1.396.006-.83-.479-1.268-1.255-1.268z"></path><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6zM9.498 16.19c-.309.29-.765.42-1.296.42a2.23 2.23 0 0 1-.308-.018v1.426H7v-3.936A7.558 7.558 0 0 1 8.219 14c.557 0 .953.106 1.22.319.254.202.426.533.426.923-.001.392-.131.723-.367.948zm3.807 1.355c-.42.349-1.059.515-1.84.515-.468 0-.799-.03-1.024-.06v-3.917A7.947 7.947 0 0 1 11.66 14c.757 0 1.249.136 1.633.426.415.308.675.799.675 1.504 0 .763-.279 1.29-.663 1.615zM17 14.77h-1.532v.911H16.9v.734h-1.432v1.604h-.906V14.03H17v.74zM14 9h-1V4l5 5h-4z"></path></svg> Reporte en PDF </a>
       </span>
       <!-- <span class="text-xs inline-block px-2.5 leading-none text-center whitespace-nowrap align-baseline ">
      <a class="text-lg flex inline-block pr-2  justify-start focus:outline-none rounded text-white bg-blue-900 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-800" href="../includes/_sesion/cerrarSesion.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:; margin-right: 5px;"><path d="M16 13v-2H7V8l-5 4 5 4v-3z"></path><path d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z"></path></svg>Cerrar Sesión
       </a></span>  -->
		</div>
		
</div>


    <div class="flex space-x-2 justify-center">
  <form class="w-full max-w-sm m-auto w-50 mt-4 mb-2">
			<form action="" method="GET">
      <span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-middle rounded">

			<input class="border-4 pb-3 text-base border-blue-900 ml-2  rounded-lg px-4 py-2 focus:border-blue-500" type="search" placeholder="Buscar" 
			name="busqueda">
      
      <span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-middle	  rounded">

			<button class=" cursor-pointer text-base  flex inline-block  justify-start focus:outline-none rounded text-white bg-blue-900 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 mr-1 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-800" type="submit" name="enviar"> <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path><path d="M11.412 8.586c.379.38.588.882.588 1.414h2a3.977 3.977 0 0 0-1.174-2.828c-1.514-1.512-4.139-1.512-5.652 0l1.412 1.416c.76-.758 2.07-.756 2.826-.002z"></path></svg> </button> 

      </span>
      <span class="text-xs inline-block py-1 leading-none text-center whitespace-nowrap align-middle rounded">


<button  class="text-base flex inline-block   justify-start focus:outline-none rounded text-white bg-blue-900 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-3 py-2.5  mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-800"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M10 11H7.101l.001-.009a4.956 4.956 0 0 1 .752-1.787 5.054 5.054 0 0 1 2.2-1.811c.302-.128.617-.226.938-.291a5.078 5.078 0 0 1 2.018 0 4.978 4.978 0 0 1 2.525 1.361l1.416-1.412a7.036 7.036 0 0 0-2.224-1.501 6.921 6.921 0 0 0-1.315-.408 7.079 7.079 0 0 0-2.819 0 6.94 6.94 0 0 0-1.316.409 7.04 7.04 0 0 0-3.08 2.534 6.978 6.978 0 0 0-1.054 2.505c-.028.135-.043.273-.063.41H2l4 4 4-4zm4 2h2.899l-.001.008a4.976 4.976 0 0 1-2.103 3.138 4.943 4.943 0 0 1-1.787.752 5.073 5.073 0 0 1-2.017 0 4.956 4.956 0 0 1-1.787-.752 5.072 5.072 0 0 1-.74-.61L7.05 16.95a7.032 7.032 0 0 0 2.225 1.5c.424.18.867.317 1.315.408a7.07 7.07 0 0 0 2.818 0 7.031 7.031 0 0 0 4.395-2.945 6.974 6.974 0 0 0 1.053-2.503c.027-.135.043-.273.063-.41H22l-4-4-4 4z"></path></svg><a href="usuarios.php"></a></button>
</span> 
			</form>




      






  </div>
  <?php
$conexion=mysqli_connect("localhost","root","","intranet"); 
$where="";

if(isset($_GET['enviar'])){
  $busqueda = $_GET['busqueda'];


	if (isset($_GET['busqueda']))
	{
		$where="WHERE usuario.email LIKE'%".$busqueda."%' OR Usuarios  LIKE'%".$busqueda."%'
    OR NombreCompleto  LIKE'%".$busqueda."%' OR Clave  LIKE'%".$busqueda."%' OR Fecha  LIKE'%".$busqueda."%' OR Clave  LIKE'%".$busqueda."%' OR Gerencias  LIKE'%".$busqueda."%'";
	}
  
}


?>
           <br>


			</form>
      <div class="container-fluid">
  
  </div>

  <br>
  <div class="overflow-x-auto">
 
      <table class="w-full text-black  dark:text-gray-400  sm:p-4 ">

                   
                         <thead class='text-sm text-white border-4 border-white font-semibold uppercase bg-blue-900  dark:text-gray-400'>    
                         <tr class=" border-4 border-blue-900">
                        <th scope='col' class=' border-4 border-blue-900 py-4 px-6 text-center'>Usuario</th>
                        <th scope='col' class=' border-4 border-blue-900 py-4 px-6 text-center'>Nombre Completo</th>
                        <th scope='col' class=' border-4 border-blue-900 py-4 px-6 text-center'>Correo</th>
                        <th scope='col' class=' border-4 border-blue-900 py-4 px-6 text-center'>Contraseña</th>
                        <th scope='col' class=' border-4 border-blue-900 py-4 px-6 text-center'>Fecha</th>
                        <th scope='col' class=' border-4 border-blue-900 py-4 px-6 text-center'>Gerencias</th>
                        <th scope='col' class=' border-4 border-blue-900 py-4 px-6 text-center'>Acciones</th>
         
                        </tr>
                        </thead>
                        <tbody class='border-4 border-blue-900'>

				<?php

$conexion=mysqli_connect("localhost","root","","intranet");               
$SQL="SELECT usuario.IdUsuarios, usuario.Usuarios, usuario.email, usuario.Clave, usuario.NombreCompleto,
usuario.Fecha, permisos.Gerencias FROM usuario
LEFT JOIN permisos ON usuario.IdPermisos = permisos.IdPermisos $where";
$dato = mysqli_query($conexion, $SQL);

if($dato -> num_rows >0){
    while($fila=mysqli_fetch_array($dato)){
    
?>
<tr class='py-3 px-6  border-4 border-blue-900 text-black'>
<td class='border-4 border-blue-900 text-center py-4'><?php echo $fila['Usuarios']; ?></td>
<td class='border-4 border-blue-900 text-center py-4'><?php echo $fila['NombreCompleto']; ?></td>
<td class='border-4 border-blue-900 text-center py-4'><?php echo $fila['email']; ?></td>
<td class='border-4 border-blue-900 text-center py-4'><?php echo $fila['Clave']; ?></td>
<td class='border-4 border-blue-900 text-center py-4'><?php echo $fila['Fecha']; ?></td>
<td class='border-4 border-blue-900 text-center py-4'><?php echo $fila['Gerencias']; ?></td>



<td class="justify-center text-center content-center">


<a class="bg-green-700 justify-center p-2 rounded text-white font-semibold"  href="editar_user.php?IdUsuarios=<?php echo $fila['IdUsuarios']?>">Editar</a>

  <a class="bg-red-700 justify-center p-2 rounded text-white font-semibold"  href="eliminar_user.php?IdUsuarios=<?php echo $fila['IdUsuarios']?>">
Eliminar</a>

</td>
</tr>


<?php
}
}else{

    ?>
    <tr class="text-center">
    <td colspan="16">No existen registros</td>
    </tr>

    
    <?php
    
}

?>


	</body>
  </table>
</div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="../js/acciones.js"></script>
<script src="../js/buscador.js"></script>




</html>