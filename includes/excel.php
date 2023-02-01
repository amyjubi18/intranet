<?php

require_once ("_db.php");
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=reporte.xls");
?>


<table class="table table-striped table-dark " id= "table_id">

                   
<thead>    
<tr>
<th>Usuario</th>
<th>Correo</th>
<th>Contraseña</th>
<th>Nombre Completo</th>
<th>Fecha</th>
<th>Gerencias</th>


</tr>
</thead>
<tbody>

<?php

$conexion=mysqli_connect("localhost","root","","intranet");               
$SQL="SELECT usuario.IdUsuarios, usuario.Usuarios, usuario.email, usuario.Clave, usuario.NombreCompleto,
usuario.Fecha, permisos.Gerencias FROM usuario
LEFT JOIN permisos ON usuario.IdPermisos = permisos.IdPermisos";
$dato = mysqli_query($conexion, $SQL);

if($dato -> num_rows >0){
while($fila=mysqli_fetch_array($dato)){

?>
<tr>
<td><?php echo $fila['Usuarios']; ?></td>
<td><?php echo $fila['email']; ?></td>
<td><?php echo $fila['Clave']; ?></td>
<td><?php echo $fila['NombreCompleto']; ?></td>
<td><?php echo $fila['Fecha']; ?></td>
<td><?php echo $fila['Gerencias']; ?></td>



<?php
}

}
