<?php include "header.php"; ?>

<?php
    session_start();
    $operacion = "";
    if (isset($_SESSION['operacion'])) {
        $operacion = $_SESSION['operacion'];
        unset($_SESSION['operacion']);
    }
?>

<div class="container">
    <div class="row mt-4">
        <h3> Informacion personal de estudiante de sistemas</h3>
        <div class="col">
            <form action="servidor/agregarAlumno.php" method="post" enctype="multipart/form-data">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre">

                <label for="apaterno">Apellido paterno</label>
                <input type="text" class="form-control" name="apaterno" id="apaterno">
                
                <label for="amaterno">Apellido Materno</label>
                <input type="text" class="form-control" name="amaterno" id="amaterno">

                <label for="matricula">Matricula</label>
                <input type="text" class="form-control" name="matricula" id="matricula">
                
                <label for="fechaNacimiento">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="fechaNacimiento" id="fechaNacimiento">

                <label for="especialidad">Especialidad</label>
                <input type="text" class="form-control" name="especialidad" id="especialidad"> 

                <label for="sexo">Sexo</label>
                    <select name="sexo" id="sexo" class="form-control">
                        <option values=>Selecciona tu sexo</option>
                        <option values="femenino">Femenino </option>
                        <option values="masculino">Masculino </option>
                    </select>
                
                <label for="imagen">Imagen de perfil</label>
                <input type="file" class="form-control" name="imagen" id="imagen" >
                <br>
                <button class="btn btn-info">Agregar alumno</button>
            </form>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <h3>Tabla de Informacion de alumnos de sistemas</h3>
            <?php include "tablaPerfiles.php";  ?>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>
<script>
    let operacion = "<?php echo $operacion; ?>";

    if (operacion == "insert") {
        Swal.fire(":D", "Agregado con exito!", "success");
    } else if(operacion == "error") {
        Swal.fire(":(", "Error al agregar!", "error");
    } else if (operacion == "delete") {
        Swal.fire(":D", "Eliminado con exito!", "info");
    } else if (operacion == "error2") {
        Swal.fire(":(", "Error al eliminar!", "error");
    }

</script>