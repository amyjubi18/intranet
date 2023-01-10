<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
		<script src="js/jquery.min.js"></script>
    <title>Modificar</title>
	</head>
	<body class="">
	
  <div class="relative w-50 pb-4">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-auto">
        <?php include "php1/navbar.php"; ?>
<button class=" w-52 bg-blue-900 mt-20 mx-1 px-4 py-3 rounded-lg font-semibold text-white  hover:bg-blue-800">
  
    <a href="./registro.php" class="flex"><svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255);transform: ;msFilter:;"><path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"></path></svg>NUEVO USUARIO</a>    
    </button>
        </div>
</div>

<?php include "php/tabla.php"; ?>

	</body>
</html>