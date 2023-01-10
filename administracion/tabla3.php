<?php
include "../php/conexion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"/>
    <title>Document</title>
</head>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.datatables.min.js"></script>



<body>
<div class="center mt-5">
<div class ="card pt-32">
<h1>Buscador</h1>
<div class="container-fluid p-5">

<table class="table" id="example">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Número de Expediente</th>
<th scope="col">Descripción</th>
<th scope="col">Archivo</th>
<th scope="col">Fecha</th>
<th scope="col">Categoría</th>
</tr>
</thead>

<tbody>
<?php
include "../php/conexion.php";
$sql = "SELECT archivo.IdArchivo, archivo.name, archivo.description, archivo.ruta, archivo.tipo, archivo.fecha, categoria.Categoria, categoria.IdCategoria FROM archivo, categoria WHERE (archivo.IdCategoria = categoria.IdCategoria)";
$busqueda = mysqli_query($con, $sql);
$numero = mysqli_num_rows($busqueda);
?>





<h5 class="card-tittle">Resultados (<?php echo $numero;?>)</h5>
<div class="container_card"></div>

<?php
while ($resultado = mysqli_fetch_assoc($busqueda)) {
    if (!empty($num)) {
        $num = $num++;
    } else {
        $num = '';}
    $num++;




?>
<tr>

<th scope="row" style="vertical-align: middle;"> <?php echo $num; ?></th>
<td style="vertical-align: middle;"><?php echo $resultado['name']?></td>
<td style="vertical-align: middle;"><?php echo $resultado['description']?></td>
<td style="vertical-align: middle;"><?php echo $resultado['ruta']?></td>
<td style="vertical-align: middle;"><?php echo $resultado['fecha']?></td>
<td style="vertical-align: middle;"><?php echo $resultado['Categoria']?></td>
</tr>

<?php } ?>

</tbody>

</table>
</div>
</div>
</div>
<script>
    $(document).ready(function() {
//   $.fn.DataTable.ext.pager.numbers_length = 5;
    $('#example').DataTable( {

// que aparezcan ultimo siguiente etc...
       "pagingType":"full_numbers",
// ordenamos
       "order": [[ 2, "ASC" ]],
    //    cambiamos idioma
       "language": {
    "decimal":        ".",
    "emptyTable":     "No hay datos para mostrar",
    "info":           "del _START_ al _END_ (_TOTAL_ total)",
    "infoEmpty":      "del 0 al 0 (0 total)",
    "infoFiltered":   "(filtrado de todas las _MAX_ entradas)",
    "infoPostFix":    "",
    "thousands":      "'",
    "lengthMenu":     "Mostrar _MENU_ entradas",
    "loadingRecords": "Cargando...",
    "processing":     "Procesando...",
    "search":         "Buscar:",
    "zeroRecords":    "No hay resultados",
    "paginate": {
      "first":      "Primero",
      "last":       "Último",
      "next":       "Siguiente",
      "previous":   "Anterior"
    },
    "aria": {
      "sortAscending":  ": ordenar de manera Ascendente",
      "sortDescending": ": ordenar de manera Descendente ",
    }
  }

    } );  
} );

</script>
</body>
</html>