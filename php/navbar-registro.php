<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
<?php
include "conexion.php";
if(!isset($_SESSION["user_id"])):?>
    <div class="w-full">
        <button class=" w-full bg-blue-700 hover:bg-blue-800 px-2 py-3 rounded-lg font-semibold text-white  focus:outline-none"> <a href="./login.php" >Iniciar Sesión</a></button>
       
            <?php endif;?>
    </div>
        </head>
            
        </html>