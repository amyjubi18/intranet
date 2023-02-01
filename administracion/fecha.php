<?php
	require 'conexion.php';
	if(ISSET($_POST['search'])){
		$desde = date("Y-m-d", strtotime($_POST['desde']));
		$hasta = date("Y-m-d", strtotime($_POST['hasta']));
        $contador=0;
		$query=mysqli_query($con, "SELECT t1.IdArchivo, t1.name, t1.description, t1.ruta, t1.tipo, t1.fecha, t2.Categoria, t2.IdCategoria FROM archivo t1 INNER JOIN categoria t2  ON t1.IdCategoria = t2.IdCategoria WHERE `fecha` BETWEEN '$desde' AND '$hasta'") or die(mysqli_error());

		$row=mysqli_num_rows($query);
		if($row>0){
			while($consulta=mysqli_fetch_array($query)){
                $contador++;
                $ruta = $consulta['ruta'];
?>
	<tr class='py-3 px-6 border border-4 border-blue-400'>
		<td class='border-4 border-blue-900 text-center py-4'><?php echo $contador?></td>
        <td class='border-4 border-blue-900 text-center py-4'><?php echo $consulta['name']?></td>
		<td class='border-4 border-blue-900 text-center py-4'><?php echo $consulta['description']?></td>
		<td class='border-4 border-blue-900 text-center py-4'><?php echo $consulta['ruta']?></td>
		<td class='border-4 border-blue-900 text-center py-4'><?php echo $consulta['fecha']?></td>
		<td class='border-4 border-blue-900 text-center py-4'><?php echo $consulta['Categoria']?></td>
        <td class='border-4 border-blue-900 text-center py-4'><a class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" style='margin-left: 0.5rem;' target="_blank" href="<?php echo "../documentos/" . $ruta;?>">Visualizar</a></td>
	</tr>
<?php
			}
		}else{
			echo'
			<tr>
				<td colspan = "4"><center>Registros no Existen</center></td>
			</tr>';
		}
	}else{
        $contador=0;
		$query=mysqli_query($con, "SELECT t1.IdArchivo, t1.name, t1.description, t1.ruta, t1.tipo, t1.fecha, t2.Categoria, t2.IdCategoria FROM archivo t1 INNER JOIN categoria t2  WHERE t1.IdCategoria = t2.IdCategoria ") or die(mysqli_error());
        
		while($consulta=mysqli_fetch_array($query)){
            $contador++; 
            $ruta = $consulta['ruta'];
?>
	<tr class='py-3 px-6 border border-4 border-blue-400'>
		<td class='border-2 border-blue-900 text-center py-4'><?php echo $contador?></td>
        <td class='border-2 border-blue-900 text-center py-4'><?php echo $consulta['name']?></td>
		<td class='border-2 border-blue-900 text-center py-4'><?php echo $consulta['description']?></td>
		<td class='border-2 border-blue-900 text-center py-4'><?php echo $consulta['ruta']?></td>
		<td class='border-2 border-blue-900 text-center py-4'><?php echo $consulta['fecha']?></td>
		<td class='border-2 border-blue-900 text-center py-4'><?php echo $consulta['Categoria']?></td>
        <td class='border-2 border-blue-900 text-center py-4'><a class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" style='margin-left: 0.5rem;' target="_blank" href="<?php echo "../documentos/" . $ruta;?>">Visualizar</a></td>
	</tr>
<?php
		}
	}
?>
