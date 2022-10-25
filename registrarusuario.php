
<?php


    include("coneccion.php");
 if (isset($_POST['enviar'])){
    if (strlen($_POST['usuario'])>= 1 &&
        strlen($_POST['contraseña'])>= 1){
            $usuario = trim($_POST['usuario']);
            $contraseña = trim($_POST['contraseña']);
           
            $registrado = "INSERT INTO usuarios(usuario, contraseña) VALUES ('$usuario','$contraseña')";          

            $verificar_dni=mysqli_query($conex,"SELECT * FROM alumnos WHERE alumno_dni='$dni'");
            if(mysqli_num_rows($verificar_dni) > 0){
                ?>
<body>
<header class="bg_animate">
        <div class="header_nav">
            <div class="contenedor">
            <h3><div style="text-align: center"><font color="#FF0000"><u>¡El Número de DNI ya se Encuentra Registrado, Por Favor Compruebe o Ingrese Otro!</u></font></div></h3>
            </div>
        </div>
        <?php
        include("formularioregistro.php");
        ?>
    </header>
</body>
                <?php
                exit();
            }
            
            $resultado = mysqli_query ($conex,$registrado);
            if ($resultado){
                ?>
<body>
<header class="bg_animate">
        <div class="header_nav">
            <div class="contenedor">
            <h1><div style="text-align: center"><font color="#0000FF"><u>¡Datos Registrados Correctamente!</u></font></div></h1>
            </div>
        </div>
        <?php
        header("location:login.php");
        ?>
    </header>
</body>
                <?php
            } else {
                ?>
<body>
<header class="bg_animate">
        <div class="header_nav">
            <div class="contenedor">
            <h1><div style="text-align: center"><font color="#FF0000"><u>¡UPS Algo Salió Mal!</u></font></div></h1>
            </div>
        </div>
        <?php
        include("formularioregistro.php");
        ?>
    </header>
</body>
                <?php
            } 
        } else {
                ?>
<body>
<header class="bg_animate">
        <div class="header_nav">
            <div class="contenedor">
            <h1><div style="text-align: center"><font color="#FF0000"><u>¡Por Favor Complete Todos Los Campos!</u></font></div></h1>
            </div>
        </div>
        <?php
        include("formularioregistro.php");
        ?>
    </header>
</body>
                <?php
            }
     }
 
?>

