<?php
    include "servidor/conexion.php";
    $conexion = conexion();
    $sql = "SELECT id_perfil,nombre,apaterno,amaterno,matricula,fechaNacimiento,
            especialidad,sexo,foto,extension
            FROM t_perfiles_alumno";

    $respuesta = mysqli_query($conexion, $sql);
?>
<table class="table table-condensed table-hover">
    <thead>
        <th>Paterno</th>
        <th>Materno</th>
        <th>Nombre</th>
        <th>Edad</th>
        <th>Matricula</th>
        <th>Especialidad</th>
        <th>Sexo</th>
        <th>Imagen perfil</th>
        <th>Eliminar</th>
    </thead>
    <tbody>
        <?php 
            while($mostrar = mysqli_fetch_array($respuesta)) {  

                //fecha de nacimineto ingresada por el usuario
                $fecha_nacimiento = $mostrar['fechaNacimiento'];
                //fecha actual de 2021  es Una representación numérica completa de un año, 4 dígitos
                $año_actual = date("Y");
                //DATEDIFF informa la diferencia entre la fecha de inicio y la fecha de finalización 
                $edad=date_diff(date_create($fecha_nacimiento),date_create($año_actual));      
        ?>
        <tr>
            <td><?php echo $mostrar['apaterno'];?></td>
            <td><?php echo $mostrar['amaterno'];?></td>
            <td><?php echo $mostrar['nombre'];?></td>
            <!--es el conciente su representación de dos dígitos de un año-->
            <th><?php echo $edad->format('%y') . " años" ?></th>

            <td><?php echo $mostrar['matricula'];?></td>
            <td><?php echo $mostrar['especialidad'];?></td>
            <td><?php echo $mostrar['sexo']; ?></td>

            <td>
            <?php
                $ext = $mostrar['extension'];
                $imagen = '';
                
                if ($ext == "jpg") {
                    $cadenaImagen = '<img src=' . 'perfiles/' . $mostrar['foto'] . ' width="50px" height="50px">';
                    echo '<a href="mostrarPerfil.php?nombre=' . $mostrar['foto'] . '" target="_blank"> ' . $cadenaImagen . ' </a>';

                }
                
            ?>
            
            </td>
            </td>
            <td>
                <form action="servidor/eliminarPerfil.php" method="POST">
                    <input type="text" hidden name="idPerfil" value="<?php echo $mostrar['id_perfil']?>">
                    <button class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>