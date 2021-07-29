<?php

function conexion() {
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $db = "perfiles";

    $conexion = mysqli_connect($servidor, $usuario, $password, $db);

    return $conexion;
}