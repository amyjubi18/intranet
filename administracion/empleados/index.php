
<?php

session_start();
error_reporting(0);

$validar = $_SESSION['Usuarios'];

if( $validar == null || $validar = ''){

  header("Location: /intranet/includes/login.php");
  die();
  
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../css/inicio.css">

    <title> Inicio</title>
</head>

<body >
       <div class="bg-origin-content	 bg-center 		bg-no-repeat	 " style="background-image: url('../img/fondo-papa.jpg');">
<?php include ("./menu.php");?>

<div >
<div>
  <h1 >INICIO EMPLEADO</h1>
  <br>
  <br>
</div>
</div>
</div> 

</body>
</html>

