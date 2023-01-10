
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title> Registro</title>
</head>

<body class="bg-fixed bg-center bg-no-repeat bg-cover" style="background-image: url(./img/fondo.jpg)">
    <img src="./img/cinti.jpg"  class="img-responsive" width="100%" height="100%">
    <section class="justify-center md:flex-row h-screen items-center py-1">
	
<div class="mt-3 mb-2">
        
        <div class="bg-white items-center p-3 rounded-lg justify-center  flex md:mx-auto md:mx-0 md:max-w-md lg:max-w-full w-full md:w-1/2 xl:w-1/3 px-6 lg:px-16 xl:px-12 snap-none">
            <div class="w-full h-100 mb-1 touch-none">
                <h1 class="text-4xl font-bold text-center py-3 pb-0 text-blue-900">Intranet</h1>
                <h1 class="text-2xl font-bold text-center leading-tight mt-3">Registro</h1>
                <form role="form" name="registro" class="mt-0" action="php/registro.php" method="POST">
                <div class="mt-1">
                        <label for="Usuarios" class="block text-gray-700">Nombre de Usuario:</label>
                        <input type="text" placeholder="Ingresa el Nombre de Usuario" class="w-full bg-gray-200 mt-2 border focus:border-blue-900 focus:bg-white focus:outline-none rounded-lg px-4 py-3" id="Usuarios" name="Usuarios" autocomplete autofocus required>
                    </div>
                    <div class="mt-1">
                        <label class="block text-gray-700" for="NombreCompleto">Nombre y Apellido:</label>
                        <input type="text" placeholder="Ingresa el Nombre y Apellido" class="w-full bg-gray-200 mt-2 border focus:border-blue-900 focus:bg-white focus:outline-none rounded-lg px-4 py-3" autocomplete autofocus required name="NombreCompleto" id="NombreCompleto">
                    </div>
                    
                    <div class="mt-1">
                        <label class="block text-gray-700" for="email">Correo Electónico:</label>
                        <input type="email" placeholder="Ingresa el Correo" class="w-full bg-gray-200 mt-2 border focus:border-blue-900 focus:bg-white focus:outline-none rounded-lg px-4 py-3" autocomplete autofocus required name="email" id="email">
                    </div>
                    
                    <div class="justify-center h-sreen mt-1">
                        <label class="block text-gray-700" for="Clave">Contraseña:</label>
                        <input type="password" minlength="6" placeholder="Ingresa la Contraseña" class="w-full bg-gray-200 mt-2 border focus:border-blue-900 focus:bg-white focus:outline-none rounded-lg px-4 py-3" required id="Clave" name="Clave">
                    </div>
					<div class="justify-center h-sreen mt-1">
                        <label class="block text-gray-700" for="confirm_password">Repetir Contraseña:</label>
                        <input type="password" minlength="6" placeholder="Ingresa Nuevamente la Contraseña" class="w-full bg-gray-200 mt-2 border focus:border-blue-900 focus:bg-white focus:outline-none rounded-lg px-4 py-3" required id="confirm_password" name="confirm_password">
                    </div>
                    
                    <div class="justify-center h-sreen mt-1">
                    <label for="permisos" class="block text-gray-700">Gerencia: </label>
                    <select class="block  w-full bg-white mt-2 border border-gray-200 hover:border-gray-500 px-4 py-3 pr-8 rounded shadow leading-tight " >
                    <option class="px-4 py-3 pr-8 hover:bg-gray-200 hover:px-2" value="0">Seleccione la Gerencia</option>
                       <?php
                        include("php/conexion.php");
                        $consulta = "SELECT * FROM permisos";
                        
                        $ejecutar = mysqli_query($con, $consulta);
                        while($row = mysqli_fetch_array($ejecutar)){
                            $IdPermisos = $row['IdPermisos'];
                            $permiso =$row['Gerencias'];
                        echo "<option value = '".$IdPermisos."' >".$permiso."</option>";

                        }
                        ?> 
                        
                    </select>  

                    
                    </div>
                    <div class="mt-2 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                    <button class="w-full bg-blue-900 mr-1 px-4 py-2 rounded-lg font-semibold text-white  hover:bg-blue-800 focus:outline-none" type="submit" onclick="Limpiar();">Registrar</button>
					<?php include "php/navbar-registro.php"; ?>  
                    </div>
					</form>
        		</div>
        </div>
        </div>
    </section>
    <script type="text/javascript">
function Limpiar() {
var t = document.getElementById("f").getElementsByTagName("input");
for (var i=0; i<t.length; i++) {
    t[i].value = "";
    }
}
</script>
	<script src="js/valida_registro.js"></script>
</body>

</html>