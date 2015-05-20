<?php

function conectar() {

    $link = mysql_connect("localhost", "practica8", "Practica8");

    mysql_set_charset('utf8');

    mysql_select_db("practica8", $link) OR DIE("Error: No es posible establecer la conexión");

    return $link;
}

function query($sql, $con) {

    $result = mysql_query($sql, $con);

    return $result;
}

?>
