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

<body class="bg-fixed bg-center bg-no-repeat bg-cover" style="background-image: url(../img/fondo.jpg)">
    <img src="../img/cinti.jpg"  class="img-responsive" width="100%" height="100%">
    <section class="justify-center md:flex-row h-screen items-center py-1">
	
<div class="mt-24">
        </div>
        <div class="bg-white items-center p-3 rounded-lg justify-center  flex md:mx-auto md:mx-0 md:max-w-md lg:max-w-full w-full md:w-1/2 xl:w-1/3 px-6 lg:px-16 xl:px-12 snap-none">
            <div class="w-full h-100 mb-1 touch-none">
                <h1 class="text-4xl font-bold text-center py-3 pb-0 text-blue-900">Intranet</h1>
                <h1 class="text-2xl font-bold text-center leading-tight mt-3">Recuperar Contraseña</h1>
                <form role="form" name="registro" class="mt-0" action="php/registro.php" method="POST">
                       
                    <div class="justify-center h-sreen mt-1">
                        <label class="block text-gray-700" for="email">Correo Electónico:</label>
                        <input type="email" placeholder="Ingresa el Correo" class="w-full bg-gray-200 mt-2 border focus:border-blue-900 focus:bg-white focus:outline-none rounded-lg px-4 py-3" autocomplete autofocus required name="email" id="email">
                    </div>
                    
                   
                    <div class="mt-2 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                    <button class="w-full bg-blue-900 mr-1 px-4 py-2 rounded-lg font-semibold text-white  hover:bg-blue-800 focus:outline-none" type="submit">Recuperar</button>
                    </div>
					
        		</div>
    </section>
	<script src="js/valida_registro.js"></script>
</body>

</html>