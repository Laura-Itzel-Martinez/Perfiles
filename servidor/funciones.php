<?php

    include "conexion.php";

    function agregarAlumno($nombre,$apaterno,$amaterno,$matricula,$fecha,$especialidad, $sexo,$nombreArchivo) {
        $conexion = conexion();
        $sql = "INSERT INTO t_perfiles_alumno (nombre
                                                ,apaterno,
                                                amaterno,
                                                matricula,
                                                FechaNacimiento,
                                                especialidad,
                                                sexo,foto) 
                VALUES ('$nombre', 
                        '$apaterno', 
                        '$amaterno',
                        '$matricula',
                        '$fecha',
                        '$especialidad',
                        '$sexo', '$nombreArchivo')";

        $respuesta = mysqli_query($conexion, $sql);

        return $respuesta;
    }
