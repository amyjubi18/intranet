<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if(!isset($_SESSION["user_id"])):?>
    <div class="w-full">
        <button class=" w-full bg-blue-700 hover:bg-blue-800 px-4 py-3 mt-4 rounded-lg font-semibold text-white focus:bg-blue-400 focus:outline-none" type="submit"> <a href="./registro.php">Registrar</a></button>
            <?php endif;?>
    </div>
        </head>
            
        </html>