<?php
include '../php/conexion.php';
if(isset($_POST['submit'])){


    if(is_uploaded_file($_FILES['fichero']['tmp_name'])){

        $ruta = "documentos/";
        $nombrefinal= trim( $_FILES['fichero']['name']);
        $nombrefinal = str_replace(" ", "", $nombrefinal);
        $upload= $ruta . $nombrefinal;
        
        if(move_uploaded_file($_FILES['fichero']['tmp_name'], $upload)){


            $nombre= $_POST["nombre"];
            $description= $_POST["description"];
            $fecha = $_POST["fecha"];

            $sql ="INSERT INTO archivo (name,description,ruta,tipo,size,fecha) VALUES ('$nombre','$description','".$_FILES['fichero']['name']."','".$_FILES['fichero']['type']."','".$_FILES['fichero']['size']."','$fecha')";

            $query= mysqli_query($con, $sql);
            print "<script>alert(\"el archivo '".$nombre."'se ha subido con éxito\");</script>";
        }
    }
    
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>
<body>
<div class=" max-w-fit	p-2 my-5 ">
<div class=" max-w-fit		p-2  my-5  ">
 
<div class="mt-3 mb-2">
        
        <div class="bg-white border-4 items-center p-8 rounded-lg justify-center  flex md:mx-auto md:mx-0 md:max-w-md lg:max-w-full w-full md:w-1/2 xl:w-1/3 px-6 lg:px-16 xl:px-12 snap-none">
            <div class="w-full h-100 mb-1 touch-none">
                <h1 class="text-4xl font-bold text-center py-3 pb-0 text-blue-900">Cargar Documento</h1>
                <form role="form" action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST" enctype="multipart/form-data">
                
                    <div class="mt-3">
                    <label class="block text-gray-700" for="default_size">Subir Documento</label>
                <input class="block w-full text-lg placeholder:py-3 border border-blue-900 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="large_size" type="file" name="fichero"  size="150" accept=".jpg, .png, .jpeg, .pdf" maxlength="150">
                </div>
                
                <div class="mt-3">
                        <label for="" class="block text-gray-700">Nombre del Archivo:</label>
                        <input type="text" placeholder="Ingresa el Nombre del Archivo" class="w-full bg-gray-200 mt-2 border focus:border-blue-900 focus:bg-white focus:outline-none rounded-lg px-4 py-3" id="" name="nombre" autocomplete >
                    </div>   
                    <div class="mt-3">
                        <label for="" class="block text-gray-700">description del Archivo:</label>
                        <input type="text" placeholder="Ingresa la descripción del Archivo" class="w-full bg-gray-200 mt-2 border focus:border-blue-900 focus:bg-white focus:outline-none rounded-lg px-4 py-3" id="" name="description" autocomplete >
                    </div>  

                    <div class="justify-center h-sreen mt-1 ">
                        
                    <label for="permisos" class="block text-gray-700 mt-2">Categorías: </label>
                    <div class="flex">
                    <select class="block  w-60 bg-white mt-2 border border-blue-900  rounded-lg cursor-pointer hover:border-gray-500 px-4 py-3 pr-8 rounded shadow leading-tight " >
                    <option class="px-4 py-3 pr-8 hover:bg-gray-200 hover:px-2" value="0">Seleccione la Categoría</option>
                       
                    <?php
                        $listar = null;
                        $directorio = opendir("documentos/");
                        while($elemento = readdir($directorio)){
                            if($elemento != '.' && $elemento != '..'){
                            if(is_dir("documentos/".$elemento)){

                                echo "<option value = '$elemento' >".$elemento."</option>";
                            }else{
                                $listar ="<option value='documentos/$elemento' '>$elemento</option>";
                            }
                        }
                        }
                        ?> 


                    </select>  
                        
                    <button class=" w-30 bg-blue-900  mx-4 px-4 py-3 rounded-lg font-semibold text-white  hover:bg-blue-800" name="submit" type="submit">
  
                    <a href="./documentos/categoria.php" class="flex"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M2.165 19.551c.186.28.499.449.835.449h15c.4 0 .762-.238.919-.606l3-7A.998.998 0 0 0 21 11h-1V8c0-1.103-.897-2-2-2h-6.655L8.789 4H4c-1.103 0-2 .897-2 2v13h.007a1 1 0 0 0 .158.551zM18 8v3H6c-.4 0-.762.238-.919.606L4 14.129V8h14z"></path></svg>Nueva Categoria</a>    
                    </button>
                    </div>
                    </div>
                    <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 mt-3 pointer-events-none">
    

    
                </div>
                <label for="" class="block text-gray-700 mt-2">Fecha del Documento: </label>
                <input datepicker datepicker-autohide type="date" required="true" id="fecha"  class=" mt-3 border border-blue-900  rounded-lg cursor-pointer  text-gray-900 text-sm rounded-lg focus:ring-blue-900 focus:border-blue-500 block w-full pl-3 p-2.5  dark:bg-blue-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-900 dark:focus:border-blue-900" >
                </div>

                        <div class="mt-4 items-center block">
                    
                    <input class=" w-full bg-blue-900 items-center px-4 py-3  rounded-lg font-semibold text-white  hover:bg-blue-800" name="submit" type="submit" value="Guardar">
                        </div>
					</form>
                    </div>
        		</div>
        </div>
        </div>


</div>
</div>
</body>
</html>