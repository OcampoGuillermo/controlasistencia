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
            $apellido = $_POST['apellido'];
            $celular = $_POST['celular'];
            $dni = $_POST['dni'];
            $correo = $_POST['correo'];
            $localidad = $_POST['localidad'];
            $direccion = $_POST['direccion'];
        
            $actualizar = "UPDATE profesores SET profesor_nom='$nombre', profesor_ape='$apellido', profesor_cel='$celular', profesor_dni='$dni', profesor_correo='$correo', profesor_localidad='$localidad', profesor_direccion='$direccion' WHERE profesor_id='$id'";            
            
            $resultado=mysqli_query($conex,$actualizar);
            
            if($resultado) {
                echo "<script>alert('SE HAN ACTUALIDADO LOS DATOS CORRECTAMENTE'); window.location='modificarprofesor.php';</script>";
            } else{
                echo"<script>alert('OJO! NO SE HAN ACTUALIZADO LOS DATOS!!!'); window.history.go(-1);</script>";
            }

?>
</html>
