
<?php
    include 'conexion.php';
    EliminarUsuario($_GET['IdUsuarios']);
function EliminarUsuario($IdUsuarios){
    include 'conexion.php';
$sentencia = "DELETE FROM usuario WHERE IdUsuarios ='".$IdUsuarios."' ";
$con->query($sentencia) or die ("Error al eliminar".mysqli_error($con));

}

?>
<script>
     alert("Datos eliminados correctamente");
    window.location = "./modificar.php"
    </script>