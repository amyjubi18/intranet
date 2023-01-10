<?php


require '../php/conexion.php';

/* Un arreglo de las columnas a mostrar en la tabla */

$columns = ['archivo.IdArchivo', 'archivo.fecha', 'archivo.name', 'archivo.description', 'archivo.ruta',  'archivo.tipo',' categoria.IdCategoria', 'categoria.Categoria'];

$relacion = ['archivo.IdCategoria = categoria.IdCategoria'];

/* Nombre de la tabla */
$table = "archivo, categoria";

/* La clave principal de la tabla. */
$id = 'archivo.IdArchivo';

$campo = isset($_POST['campo']) ? $con->real_escape_string($_POST['campo']) : null;


/* Filtrado */
$where = '';

if ($campo != null) {
    $where = "WHERE  ( ";


    $cont = count($columns);
    for ($i = 0; $i < $cont; $i++) {
        
        $where .= $columns[$i]. " LIKE '%" . $campo . "%' OR ";
    }
    $where = substr_replace($where, " ", -3);
    $where .= ")";
}



/* Limit */
$limit = isset($_POST['registros']) ? $con->real_escape_string($_POST['registros']) : 10;
$pagina = isset($_POST['pagina']) ? $con->real_escape_string($_POST['pagina']) : 0;

if (!$pagina) {
    $inicio = 0;
    $pagina = 1;
} else {
    $inicio = ($pagina - 1) * $limit;
}

$sLimit = "LIMIT $inicio , $limit";


/* Consulta */
$sql = "SELECT SQL_CALC_FOUND_ROWS  " . implode(", ", $columns) . "
FROM $table
$where
$sLimit";
$resultado = $con->query($sql);
$num_rows = $resultado->num_rows;
/* Consulta para total de registro filtrados */
$sqlFiltro = "SELECT FOUND_ROWS()";
$resFiltro = $con->query($sqlFiltro);
$row_filtro = $resFiltro->fetch_array();
$totalFiltro = $row_filtro[0];

/* Consulta para total de registro filtrados */
$sqlTotal = "SELECT count($id) FROM $table ";
$resTotal = $con->query($sqlTotal);
$row_total = $resTotal->fetch_array();
$totalRegistros = $row_total[0];

/* Mostrado resultados */
$output = [];
$output['totalRegistros'] = $totalRegistros;
$output['totalFiltro'] = $totalFiltro;
$output['data'] = '';
$output['paginacion'] = '';
$contador=0;
if ($num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {

        $contador++;
                $id = $row['IdArchivo'];
                $nombre = $row['name'];
                $descripcion = $row['description'];
                $ruta = $row['ruta'];
                $fecha = $row['fecha'];
                $idcategoria = $row['IdCategoria'];
                $categoria1 = $row['Categoria'];
                $tipo = $row['tipo'];
                $enlace =  "./prueba/" . $ruta;
                

        $output['data'] .= '<tr class="py-3 px-8 border border-4 border-blue-400">';
        $output['data'] .= '<td class="py-3 px-8 border border-4 border-blue-400">' . $contador. '</td>';
        $output['data'] .= '<td class="py-3 px-8 border border-4 border-blue-400">' . $nombre. '</td>';
        $output['data'] .= '<td class="py-3 px-8 border border-4 border-blue-400">' . $descripcion . '</td>';
        $output['data'] .= '<td class="py-3 px-8 border border-4 border-blue-400">' . $ruta. '</td>';
        $output['data'] .= '<td class="py-3 px-0.5 border border-4 border-blue-400">' . $fecha. '</td>';
        $output['data'] .= '<td class="py-3 px-8 border border-4 border-blue-400">' . $categoria1 . '</td>';
        $output['data'] .= '<td class="py-3 px-8 border border-4 border-blue-400"><a class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" target="_blank"  href='.$enlace.'>Visualizar</a></td>';
        $output['data'] .= '</tr>';
    }
} else {
    $output['data'] .= '<tr>';
    $output['data'] .= '<td colspan="7">Sin resultados</td>';
    $output['data'] .= '</tr>';
}

if ($output['totalRegistros'] > 0) {
    $totalPaginas = ceil($output['totalRegistros'] / $limit);

    $output['paginacion'] .= '<nav>';
    $output['paginacion'] .= '<ul class=" inline-flex space-y-4  mb-3"> <br><br>';

    $numeroInicio = 1;

    if(($pagina - 4) > 1){
        $numeroInicio = $pagina - 4;
    }

    $numeroFin = $numeroInicio + 9;

    if($numeroFin > $totalPaginas){
        $numeroFin = $totalPaginas;
    }

    for ($i = $numeroInicio; $i <= $numeroFin; $i++) {
        if ($pagina == $i) {
            $output['paginacion'] .= '<li class="page-item active"><a class="px-3 rounded py-2 leading-tight text-blue-500 bg-white border-4 border-blue-500 font-medium hover:bg-blue-500 hover:text-white hover:font-medium dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-blue-700 dark:hover:text-white" href="#">' . $i . '</a></li>';
        } else {
            $output['paginacion'] .= '<li class="page-item"><a class="px-3 py-2 rounded leading-tight text-blue-500 font-medium bg-white border-4 border-blue-300 hover:border-blue-500 hover:bg-blue-500 hover:text-white hover:font-medium dark:bg-gray-800 dark:border-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" href="#" onclick="getData(' . $i . ')">' . $i . '</a></li>';
        }
    }

    $output['paginacion'] .= '</ul>';
    $output['paginacion'] .= '</nav>';
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
