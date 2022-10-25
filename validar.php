<?php

    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];
    session_start();
    $_SESSION['usuario']=$usuario;

    include("coneccion.php");
    $consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and contraseña='$contraseña'";
    $resultado=mysqli_query($conex,$consulta);

    $fila=mysqli_num_rows($resultado);

    if($fila){
        header("location:principal.php");
    } else{
        ?> 
        <?php
        include("login.php");
        ?> 
        <h1 class="bad"> Error en la Autentificación</h1>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conex);
            
?> 