<?php
    session_start();
    include "funciones.php";

    $nombre = $_POST['nombre'];
    $apaterno=$_POST['apaterno'];
    $amaterno=$_POST['amaterno'];
    $matricula=$_POST['matricula'];
    $fecha=$_POST['fechaNacimiento'];
    $especialidad=$_POST['especialidad'];
    $sexo=$_POST['sexo'];


   
    
    $nombreArchivo = $_FILES['imagen']['name'];
    $extension = explode(".", $nombreArchivo);
    $extension = $extension[1];
    $rutaTemporal = $_FILES['imagen']['tmp_name'];
    $rutaDeServidor = "../perfiles";

    //subir un archivo
    //move_uploaded_file nos retorna un 1 si se subio y un 0 si no se subio

    if (move_uploaded_file($rutaTemporal, $rutaDeServidor, $nombreArchivo)) {
        $insertarEnBD = agregarAlumno($nombre,$apaterno,$amaterno,$matricula,$fecha,$especialidad, $sexo,$nombreArchivo,$extension);
        
        if ($insertarEnBD) {
            $_SESSION['operacion'] = "insert";
        } else {
            $_SESSION['operacion'] = "error";
        }
    } else {
        $_SESSION['operacion'] = "error";
    }

    header("location:../index.php");