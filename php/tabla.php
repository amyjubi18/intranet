<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
	<title>Modificar</title>
</head>
<body>
<div class=" max-w-fit	p-8 my-10 ">
<div class=" max-w-fit	p-8 my-10  border-4">
<?php

include "conexion.php";

$user_id=null;
$sql1= "SELECT usuario.IdUsuarios, usuario.Usuarios, usuario.NombreCompleto, usuario.email, usuario.Clave, permisos.Gerencias, permisos.IdPermisos FROM usuario, permisos WHERE (usuario.IdPermisos = permisos.IdPermisos)  order by IdUsuarios";

$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
	<table class='w-full text-gray-800 dark:text-gray-400 border-solid border-gray-600' >
<thead class='text-xs text-gray-700 uppercase bg-blue-200 dark:bg-gray-700 dark:text-gray-400'>
	<tr>
	<th scope='col' class='py-4 px-6 text-center'>ID</th>
	<th scope='col' class='py-4 px-6 text-center'>USUARIO</th>
	<th scope='col' class='py-4 px-6 text-center'>NOMBRE Y APELLIDO</th>
	<th scope='col' class='py-4 px-6 text-center'>CORREO ELECTÓNICO</th>
	<th scope='col' class='py-4 px-6 text-center'>CONTRASEÑA</th>
	<th scope='col' class='py-4 px-6 text-center'>GERENCIA</th>
	<th  colspan='2' scope='col' class='py-3 px-6 text-center'>OPCIONES</th>
	</tr>
	</thead>
	
<?php while ($r=$query->fetch_array()):?>
<tr class='py-3 px-6'>
<tbody>
	<td class='text-center py-4'><?php echo $r["IdUsuarios"]; ?></td>
	<td class='text-center py-4'><?php echo $r["Usuarios"]; ?></td>
	<td class='text-center py-4'><?php echo $r["NombreCompleto"]; ?></td>
	<td class='text-center py-4'><?php echo $r["email"]; ?></td>
	<td class='text-center py-4'><?php echo $r["Clave"]; ?></td>
	<td class='text-center py-4'><?php echo $r["Gerencias"]; ?></td>
	<td td colspan='2' scope='col'  class='py-6 px-6 text-center'>
		<a href="./editar.php?IdUsuarios=<?php echo $r["IdUsuarios"];?>" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800'">Editar</a>
		
		<a href='./eliminar.php?IdUsuarios="<?php echo $r['IdUsuarios'];?>"' class='focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900'>Eliminar</a>
		
	</td>
</tr>
<?php endwhile;?>
</tbody>
</table>
<?php else:?>
	<p class="">No hay resultados</p>
<?php endif;?>
</div>
</div>
</body>
</html>