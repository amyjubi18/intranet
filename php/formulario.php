<?php
include "conexion.php";

$user_id=null;
$sql1= "SELECT usuario.IdUsuarios, usuario.Usuarios, usuario.NombreCompleto, usuario.email, usuario.Clave, permisos.Gerencias, permisos.IdPermisos FROM usuario, permisos WHERE (usuario.IdPermisos = permisos.IdPermisos) AND IdUsuarios = ".$_GET["IdUsuarios"];
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}

  }
?>

<?php if($person!=null):?>
  <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title> Modificar</title>
</head>

<body class="bg-fixed bg-center bg-no-repeat bg-cover" style="background-image: url(./img/fondo.jpg)">
    <img src="./img/cinti.jpg"  class="img-responsive" width="100%" height="100%">
    <section class="justify-center md:flex-row h-screen items-center py-1">
	
<div class="mt-3 mb-3">

<div class="m-4 bg-white items-center p-3 rounded-lg justify-center mt-6 p-10 flex md:mx-auto md:mx-0 md:max-w-md lg:max-w-full w-full md:w-1/2 xl:w-1/3 px-6 lg:px-16 xl:px-12 snap-none">
            <div class="w-full h-100 mb-1 touch-none">
                <h1 class="text-4xl font-bold text-center py-2 pb-0 text-blue-900">Intranet</h1>
                <h1 class="text-2xl font-bold text-center leading-tight mt-3">Modificar Usuario</h1>

<form class="mt-0" role="form" method="post" action="php/actualizar.php">
  <div class="mt-1">
    <label class="block text-gray-700" for="Usuarios">Usuario:</label>
    <input type="text"  class="w-full bg-gray-200 mt-2 border focus:border-blue-900 focus:bg-white focus:outline-none rounded-lg px-4 py-3" autocomplete autofocus required value="<?php echo $person->Usuarios; ?>" name="Usuarios" required>
  </div>

  <div class="mt-1">
    <label class="block text-gray-700" for="NombreCompleto">Nombre y Apellido:</label>
    <input type="text" class="w-full bg-gray-200 mt-2 border focus:border-blue-900 focus:bg-white focus:outline-none rounded-lg px-4 py-3" autocomplete autofocus required  value="<?php echo $person->NombreCompleto; ?>" name="NombreCompleto" required>
  </div>

  <div class="mt-1">
    <label class="block text-gray-700" for="email">Correo Electrónico:</label>
    <input type="email" class="w-full bg-gray-200 mt-2 border focus:border-blue-900 focus:bg-white focus:outline-none rounded-lg px-4 py-3" autocomplete autofocus required value="<?php echo $person->email; ?>" name="email" >
  </div>

  <div class="mt-1">
    <label class="block text-gray-700" for="address">Contraseña:</label>
    <input type="text" class="w-full bg-gray-200 mt-2 border focus:border-blue-900 focus:bg-white focus:outline-none rounded-lg px-4 py-3" autocomplete autofocus required value="<?php echo $person->Clave; ?>" name="Clave" required>
  </div>

  
  <div class="mt-1">
    <label for="phone">Gerencia:</label>
    <select class="block  w-full bg-white mt-2 border border-gray-200 hover:border-gray-500 px-4 py-3 pr-8 rounded shadow leading-tight " name="IdPermisos" id="IdPermisos" >
                    <option class="px-4 py-3 pr-8 hover:bg-gray-200 hover:px-2" value="<?php echo $person->IdPermisos; ?>"><?php echo $person->Gerencias; ?></option>
                    <?php
                        include("conexion.php");
                        $consulta = "SELECT * FROM permisos";
                        
                        $ejecutar = mysqli_query($con, $consulta);
                        while($row = mysqli_fetch_array($ejecutar)){
                            $IdPermisos = $row['IdPermisos'];
                            $Gerencias =$row['Gerencias'];
                        echo "<option value = '".$IdPermisos."' >".$Gerencias."</option>";

                        }
                        ?> 
                        
                    </select> 



  </div>
  <div class="mt-2 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
  <input type="hidden" name="IdUsuarios" value="<?php echo $person->IdUsuarios; ?>">          
  <button  class="w-full text-center bg-blue-900 mr-1 px-4 py-2 rounded-lg font-semibold text-white hover:bg-blue-800 outline-none"  type="submit">Guardar</button></a>
                    <a href="./editar-usuario.php" class="w-full text-center bg-blue-900 mr-1 px-4 py-2 rounded-lg font-semibold text-white hover:bg-blue-800 outline-none"> 
                    Regresar</a>
 
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>

</div>
                </div>
					
                    </div>
                    </section>
                    </body>

</html>






