<?php
session_start();

/*
if (!isset($_SESSION['usuario'])) {
    header('Location: log_in.php');
}
//incluimos el archivo con las funciones
include ("funciones_mysql.php");


            $sql = "SELECT `id_partida` FROM Partidas ORDER BY `id_partida` DESC LIMIT 1";
            $resultado = query($sql, $conexion);
            while ($campo = mysql_fetch_row($resultado)) {
                $id_partida = $campo[0] + 1;
            }
			*/
$nombre = $_POST['nombre'];
echo $nombre;
$tipo = $_POST['tipo'];
echo $tipo;

$tel = $_POST['tel'];
echo $tel;
$id = $_GET['id'];
$id_usuario = $_SESSION['usuario'];
$rfc = $_POST['rfc'];
$empresa = $_POST['empresa'];
$calle = $_POST['calle'];
$num_int = $_POST['num_int'];
$num_ext = $_POST['num_ext'];
$colonia = $_POST['colonia'];
$municipio = $_POST['municipio'];
$estado = $_POST['estado'];
$cp = $_POST['cp'];
$contacto = $_POST['contacto'];
$departamento = $_POST['departamento'];
$telefono1 = $_POST['telefono1'];
$telefono2 = $_POST['telefono2'];
$email = $_POST['email'];

/*//Funcion que conecta la base de datos
$conexion = conectar();*/



