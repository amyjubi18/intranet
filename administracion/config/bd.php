<?php
function conexion(){
    $con = mysqli_connect('localhost', 'root', '', 'intranet');
    return $con;
}
function listar($conexion){
    $sql = "SELECT archivo.IdArchivo, archivo.name, archivo.description, archivo.ruta, archivo.tipo, archivo.fecha, categoria.Categoria, categoria.IdCategoria FROM archivo, categoria WHERE (archivo.IdCategoria = categoria.IdCategoria)";
    $query = mysqli_query($conexion, $sql);
    return $query;
}
function dato($conexion,$id){
    $sql = "SELECT  archivo.IdArchivo, archivo.name, archivo.description,archivo.ruta, archivo.tipo, archivo.fecha, categoria.Categoria, categoria.IdCategoria FROM archivo, categoria  WHERE IdArchivo=$id AND archivo.name = BINARY archivo.name";
    $query = mysqli_query($conexion, $sql);
    $dato = mysqli_fetch_assoc($query);
    return $dato;
}
?>