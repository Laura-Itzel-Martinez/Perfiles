<?php
    session_start();
    $idPerfil = $_POST['idPerfil'];
    
    include "conexion.php";
    $conexion = conexion();

    $sql = "DELETE FROM t_perfiles_alumno WHERE id_perfil = '$idPerfil'";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        $_SESSION['operacion'] = "delete";
    } else {
        $_SESSION['operacion'] = "error2";
    }
    header("location:../index.php");
?>