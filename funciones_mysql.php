<?php

function conectar() {

    $link = mysql_connect("localhost", "practica8", "Practica8");

    mysql_set_charset('utf8');

    mysql_select_db("mesadeayuda", $link) OR DIE("Error: No es posible establecer la conexión");

    return $link;
}

function query($sql, $con) {

    $result = mysql_query($sql, $con);

    return $result;
}

function descripcion($id_catalogo, $con) {
    $sql = "SELECT descripcion FROM Catalogo WHERE id_catalogo = '$id_catalogo'";
    $resultado = query($sql, $con);
    $campo = mysql_fetch_array($resultado);
    $descripcion = $campo['descripcion'];
    $descripcion1 = "Holi";
    return $id_catalogo;
}

?>
