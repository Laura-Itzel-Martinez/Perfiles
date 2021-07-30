<?php

    include "conexion.php";

    function agregarAlumno($nombre,$apaterno,$amaterno,$matricula,$fecha,$especialidad, $sexo,$nombreArchivo,$extension) {
        $conexion = conexion();
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
                        '$sexo', '$nombreArchivo', '$extension')";

        $respuesta = mysqli_query($conexion, $sql);

        return $respuesta;
    }
