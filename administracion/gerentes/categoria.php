<?php
include '../conexion.php';
if (!empty($_POST)) {
    if (isset($_POST['Categoria'])) {
        $categoria = $_POST["Categoria"];
        $sql = "INSERT INTO categoria (Categoria) VALUES ('$categoria')";
        $query= mysqli_query($con, $sql);
            print "<script>alert(\"el archivo '".$categoria."'se ha creado con éxito\");
            window.location='./documentos.php';</script>";
    }
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">

<title>Categoría</title>

</head>

<body>
<?php include ("./menu.php");?>
    <div class="flex w-fit justify-center mt-20 content-center	 ">
	<form method="post" class="space-y-6 border-4 border-blue-900 p-12 rounded-lg	">
    <h1 class="text-4xl mt-4 font-bold text-center py-3 pb-0 text-blue-900">Crear una Categoría</h1>
	
  
    <div class="flex justify-center">
  <div class="mt-1 w-full">
    <label class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Nombre de la categoría</label>
    <input class="bg-gray-50 w-full border border-gray-300 text-gray-900 text-sm rounded-lg border-4 focus:ring-blue-900 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" type="text"  name="Categoria" id="Categoria" value="" />
  </div>
  <br>

  

    <div class="mt-1 mb-4 ml-4 w-48 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
    <input class="w-full mt-2 bg-blue-900 mr-1 px-4 py-2 rounded-lg font-semibold text-white  hover:bg-blue-800 focus:outline-none" type="submit" name="crear" id="crear" value="Crear" />
    </div>
    </div>
    </form>
    </div>
</body>
</html>