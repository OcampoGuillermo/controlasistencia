<?php
    include("coneccion.php");
    $id = $_GET['id'];
    $eliminar = "DELETE FROM alumnos WHERE alumno_id='$id'";

    $resultadoeliminar = mysqli_query($conex,$eliminar);

    if ($resultadoeliminar){
        ?>
        <h1><div style="text-align: center"><font color="#0000FF"><u>¡Datos ELIMINADOS Correctamente!</u></font></div></h1>
        <form name="regresar" action="modificaralumno.php" method="get">
            <input type="submit" value="<-- REGRESAR" />
        </form>
        <?php
    } else {
        ?>
        <h1><div style="text-align: center"><font color="#FF0000"><u>¡UPS Algo Salió Mal!</u></font></div></h1>
        <form name="regresar" action="modificaralumno.php" method="get">
            <input type="submit" value="<-- REGRESAR" />
        </form>
        <?php
    }
?>      