<?php
    session_start();
    include "conexion.php";

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
    $rutaDeServidor = "../perfiles/";

    $conexion=conexion();

    $sql = "INSERT INTO t_perfiles_alumno (nombre
                                        ,apaterno,
                                        amaterno,
                                        matricula,
                                        FechaNacimiento,
                                        especialidad,
                                        sexo,foto,extension) 

                        VALUES ('$nombre', 
                        '$apaterno', 
                        '$amaterno',
                        '$matricula',
                        '$fecha',
                        '$especialidad',
                        '$sexo', '$nombreArchivo','$extension')";

$respuesta = mysqli_query($conexion, $sql);

if (move_uploaded_file($rutaTemporal, $rutaDeServidor. $nombreArchivo)) {
    
    if ($respuesta) {
        $_SESSION['operacion'] = "insert";
    } else {
        $_SESSION['operacion'] = "error";
    }
}
    header("location:../index.php")
    


    
?>