<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Guardados</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<?php
include ("coneccion.php");
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $curso = $_POST['curso'];
        
            $actualizar = "UPDATE materias SET materia_nom='$nombre', materia_descripcion='$descripcion', materia_curso='$curso' WHERE materia_id='$id'";            
            
            $resultado=mysqli_query($conex,$actualizar);
            
            if($resultado) {
                echo "<script>alert('SE HAN ACTUALIDADO LOS DATOS CORRECTAMENTE'); window.location='modificarmateria.php';</script>";
            } else{
                echo"<script>alert('OJO! NO SE HAN ACTUALIZADO LOS DATOS!!!'); window.history.go(-1);</script>";
            }

?>
</html>
