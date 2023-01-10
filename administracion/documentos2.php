<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
	<title>Documentos</title>
</head>
<body>
<div class=" max-w-fit	p-8 my-10 ">
<div class=" max-w-fit	p-8 my-10  border-4">
<?php

include "../php/conexion.php";

$user_id=null;

$sql1= "SELECT archivo.IdArchivo, archivo.name, archivo.description, archivo.ruta, archivo.tipo, archivo.fecha, categoria.Categoria, categoria.IdCategoria FROM archivo, categoria WHERE (archivo.IdCategoria = categoria.IdCategoria)";
$tipo = $_POST['tipo'];
$query = $con->query($sql1);
$valor='';
if($tipo=='jpg'|| $tipo=='png'){
    $valor = "<img src='data:img/jpg;base64,".$tipo."'>";
}
?>

<?php if($query->num_rows>0):?>
	<table class='w-full text-gray-800 dark:text-gray-400 border-solid border-gray-600' >
<thead class='text-xs text-gray-700 uppercase bg-blue-200 dark:bg-gray-700 dark:text-gray-400'>
	<tr>
	<th scope='col' class='py-4 px-6 text-center'>NOMBRE DEL ARCHIVO</th>
	<th scope='col' class='py-4 px-6 text-center'>DESCRIPCIÓN DEL ARCHIVO</th>
	<th scope='col' class='py-4 px-6 text-center'>DOCUMENTO</th>
	<th scope='col' class='py-4 px-6 text-center'>FECHA</th>
	<th scope='col' class='py-4 px-6 text-center'>CATEGORÍA</th>
	<th  colspan='2' scope='col' class='py-3 px-6 text-center'>OPCIONES</th>
	</tr>
	</thead>
	
<?php 


while ($r=$query->fetch_array()):?>
<tr class='py-3 px-6'>
<tbody>
	<td class='text-center py-4'><?php echo $r["name"]; ?></td>
	<td class='text-center py-4'><?php echo $r["description"]; ?></td>
	<td class='text-center py-4'><?php echo $tipo; ?></td>
	<td class='text-center py-4'><?php echo $r["fecha"]; ?></td>
	<td class='text-center py-4'><?php echo $r["Categoria"]; ?></td>
	<td td colspan='2' scope='col'  class='py-6 px-6 text-center'>
		<a href="" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800'">Editar</a>
		
		<a href='./archivo2.php' class='focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900'>Eliminar</a>
		
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