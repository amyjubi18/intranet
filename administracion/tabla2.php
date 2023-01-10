<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<title>Title</title>
</head>
<body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>
</body>
</html>


<?php

include "../php/conexion.php";


if (!isset($_POST['buscar'])){$_POST['buscar'] = '';}
if (!isset($_POST['buscadescripcion'])){$_POST['buscadescripcion'] = '';}
if (!isset($_POST['ruta'])){$_POST['ruta'] = '';}
if (!isset($_POST['buscafechadesde'])){$_POST['buscafechadesde'] = '';}
if (!isset($_POST['buscafechahasta'])){$_POST['buscafechahasta'] = '';}
if (!isset($_POST['buscacategoria'])){$_POST['buscacategoria'] = '';}
if (!isset($_POST["orden"])){$_POST["orden"] = '';}


?>




<div class="container mt-5">
    <div class="col-12">
 


    <div class="row">
<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">

        <h4 class="card-title">Buscador</h4>


<form id="form2" name="form2" method="POST" action="table2.php">
        <div class="col-12 row">

            <div class="mb-3">
                    <label  class="form-label">Nombre a buscar</label>
                    <input type="text" class="form-control" id="buscar" name="buscar" value="<?php echo $_POST["buscar"] ?>" >
            </div>

            <h4 class="card-title">Filtro de búsqueda</h4>  
            
            <div class="col-11">

                        <table class="table">
                                <thead>
                                        <tr class="filters">
                                                <th>
                                                        Descripción
                                                        <select id="assigned-tutor-filter" id="buscadescripcion" name="buscadescripcion" class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;" >
                                                                <?php if ($_POST["buscadescripcion"] != ''){ ?>
                                                                <option value="<?php echo $_POST["buscadescripcion"]; ?>"><?php echo $_POST["buscadescripcion"]; ?></option>
                                                                <?php } ?>
                                                                <option value="">Todos</option>
                                                                <option value="Compras">Compras</option>
                                                                <option value="Ventas">Ventas</option>
                                                                <option value="Alquileres">Alquileres</option>
                                                        </select>
                                                </th>



                                                <th>
                                                        Categoría
                                                        <select id="subject-filter" id="buscacategoria" name="buscacategoria" class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;" >
                                                                <?php if ($_POST["buscacategoria"] != ''){ ?>
                                                                <option value="<?php echo $_POST["Categoria"]; ?>"><?php echo $_POST["Categoria"]; ?></option>
                                                                <?php } ?>
                                                                <option value="">Todos</option>
                                                                <option style="color: blue;" value="Azul">Azul</option>
                                                                <option style="color: red;" value="Rojo">Rojo</option>
                                                                <option style="color: orange;" value="Amarillo">Amarillo</option>
                                                        </select>
                                                </th>


                                                <!-- <th>
                                                        Precio desde:
                                                        <input type="number" id="buscapreciodesde" name="buscapreciodesde" class="form-control mt-2" value="<?php echo $_POST["buscapreciodesde"]; ?>" style="border: #bababa 1px solid; color:#000000;" >
                                                </th>
                                                <th>
                                                        Precio hasta:
                                                        <input type="number" id="buscapreciohasta" name="buscapreciohasta" class="form-control mt-2" value="<?php echo $_POST["buscapreciohasta"]; ?>" style="border: #bababa 1px solid; color:#000000;" >
                                                </th> -->
                                         
                                                <th>
                                                        Fecha desde:
                                                        <input type="date" id="buscafechadesde" name="buscafechadesde" class="form-control mt-2" value="<?php echo $_POST["buscafechadesde"]; ?>" style="border: #bababa 1px solid; color:#000000;" >
                                                </th>
                                              
                                                <th>
                                                        Ruta
                                                        <select id="subject-filter" id="ruta" name="ruta" class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;" >
                                                                <?php if ($_POST["ruta"] != ''){ ?>
                                                                <option value="<?php echo $_POST["ruta"]; ?>"><?php echo $_POST["ruta"]; ?></option>
                                                                <?php } ?>
                                                                <option value="">Todos</option>
                                                                <option style="color: blue;" value="Azul">Azul</option>
                                                                <option style="color: red;" value="Rojo">Rojo</option>
                                                                <option style="color: orange;" value="Amarillo">Amarillo</option>
                                                        </select>
                                                </th>
                                        </tr>
                                </thead>
                        </table>
                </div>


                <h4 class="card-title">Ordenar por</h4>  
            
            <div class="col-11">

                        <table class="table">
                                <thead>
                                        <tr class="filters">
                                                <th>
                                                        Selecciona el orden
                                                        <select id="assigned-tutor-filter" id="orden" name="orden" class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;" >
                                                                <?php if ($_POST["orden"] != ''){ ?>
                                                                <option value="<?php echo $_POST["orden"]; ?>">
                                                                <?php 
                                                                if ($_POST["orden"] == '1'){echo 'Ordenar por nombre';} 
                                                                if ($_POST["orden"] == '2'){echo 'Ordenar por descripcion';} 
                                                                if ($_POST["orden"] == '3'){echo 'Ordenar por ruta';} 
                                                                if ($_POST["orden"] == '4'){echo 'Ordenar por categoria';} 
                                                               
                                                                if ($_POST["orden"] == '6'){echo 'Ordenar por fecha de reciente';} 
                                                                if ($_POST["orden"] == '7'){echo 'Ordenar por fecha de antigua';} 
                                                                ?>
                                                                </option>
                                                                <?php } ?>
                                                                <option value=""></option>
                                                                <option value="1">Ordenar por nombre</option>
                                                                <option value="2">Ordenar por descripcion</option>
                                                                <option value="3">Ordenar por ruta</option>
                                                                <option value="4">Ordenar por categoriar</option>
                                                                
                                                                <option value="5">Ordenar por fecha de reciente</option>
                                                                <option value="6">Ordenar por fecha de antigua</option>
                                                        </select>
                                                </th>
                                          
                                              
                                      
                                        </tr>
                                </thead>
                        </table>
                </div>


                <div class="col-1">
                        <input type="submit" class="btn " value="Ver" style="margin-top: 38px; background-color: purple; color: white;">
                </div>
        </div>


        <?php 
        /*FILTRO de busqueda////////////////////////////////////////////*/
        if ($_POST['buscar'] == ''){ $_POST['buscar'] = ' ';}
        $aKeyword = explode(" ", $_POST['buscar']);
        
       
        if ($_POST["buscar"] == '' AND $_POST['buscadescripcion'] == '' AND $_POST['ruta'] == '' AND $_POST['buscafechadesde'] == '' AND $_POST['buscafechahasta'] == ''AND $_POST['buscacategoria'] == ''){ 
                $query ="SELECT archivo.IdArchivo, archivo.name, archivo.description, archivo.ruta, archivo.tipo, archivo.fecha, categoria.Categoria, categoria.IdCategoria FROM archivo, categoria WHERE (archivo.IdCategoria = categoria.IdCategoria)";
        }else{


                $query ="SELECT archivo.IdArchivo, archivo.name, archivo.description, archivo.ruta, archivo.tipo, archivo.fecha, categoria.Categoria, categoria.IdCategoria FROM archivo, categoria  ";

        if ($_POST["buscar"] != '' ){ 
                $query .= "WHERE (archivo.IdCategoria = categoria.IdCategoria LIKE LOWER('%".$aKeyword[0]."%') ) ";
        
        for($i = 1; $i < count($aKeyword); $i++) {
           if(!empty($aKeyword[$i])) {
               $query .= " OR archivo.name LIKE '%" . $aKeyword[$i] . "%' ";
           }
         }

        }

         if ($_POST["buscadescripcion"] != '' ){
                $query .= " AND description = '".$_POST['buscadescripcion']."' ";
         }

         if ($_POST["buscafechadesde"] != '' ){
                $query .= " AND fecha BETWEEN '".$_POST["buscafechadesde"]."' AND '".$_POST["buscafechahasta"]."' ";
         }

         if ( $_POST['buscacategoria'] != '' ){
                $query .= " AND  Categoria >= '".$_POST['buscacategoria']."' ";
         }

               
         if ($_POST["ruta"] != '' ){
                $query .= " AND ruta = '".$_POST["ruta"]."' ";
         }

         if ($_POST["orden"] == '1' ){
                $query .= " ORDER BY name ASC ";
         }

         if ($_POST["orden"] == '2' ){
                $query .= " ORDER BY description ASC ";
         }

         if ($_POST["orden"] == '3' ){
                $query .= " ORDER BY ruta ASC ";
         }

         if ($_POST["orden"] == '4' ){
                $query .= " ORDER BY Categoria ASC ";
         }

         if ($_POST["orden"] == '5' ){
                $query .= " ORDER BY Categoria DESC ";
         }

         if ($_POST["orden"] == '6' ){
                $query .= " ORDER BY fecha ASC ";
         }

         if ($_POST["orden"] == '7' ){
                $query .= " ORDER BY fecha DESC ";
         }
        
       
}


         $sql = $con->query($query);

         $numeroSql = mysqli_num_rows($sql);

        ?>
        <p style="font-weight: bold; color:purple;"><i class="mdi mdi-file-document"></i> <?php echo $numeroSql; ?> Resultados encontrados</p>
</form>


<div class="table-responsive">
        <table class="table">
                <thead>
                        <tr style="background-color:purple; color:#FFFFFF;">
                                <th style=" text-align: center;"> Nombre </th>
                                <th style=" text-align: center;"> Descripción </th>
                                <th style=" text-align: center;"> ruta </th>
                                <th style=" text-align: center;"> Categoria </th>
                                <th style=" text-align: center;"> Fecha </th>
                        </tr>
                </thead>
                <tbody>
                <?php While($rowSql = $sql->fetch_assoc()) {   ?>
               
                        <tr>
                        <td style="text-align: center;"><?php echo $rowSql["name"]; ?></td>
                        <td style="text-align: center;"><?php echo $rowSql["description"]; ?></td>
                        <td style="text-align: center;"><?php echo $rowSql["ruta"]; ?></td>
                        <td style="text-align: center;"><?php echo $rowSql["Categoria"]; ?> €</td>
                        <td style=" text-align: center;"><?php echo $rowSql["fecha"]; ?></td>
                        </tr>
               
               <?php } ?>
                </tbody>
        </table>
</div>


</div>
</div>
</div>
</div>


    </div>
</div>







</body>
</html>