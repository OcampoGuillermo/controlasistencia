<?php /* Created on: 7/6/2022 */ ?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ocampo Guillermo</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<?php
 include ("coneccion.php");
 if (isset($_POST['enviar'])){
    if (strlen($_POST['nombre'])>= 1 &&
        strlen($_POST['apellido'])>= 1 &&
        strlen($_POST['celular'])>= 1 &&
        strlen($_POST['dni'])>= 1 &&
        strlen($_POST['correo'])>= 1 &&
        strlen($_POST['localidad'])>= 1 &&
        strlen($_POST['direccion'])>= 1){
            $nombre = trim($_POST['nombre']);
            $apellido = trim($_POST['apellido']);
            $celular = trim($_POST['celular']);
            $dni = trim($_POST['dni']);
            $correo = trim($_POST['correo']);
            $localidad = trim($_POST['localidad']);
            $direccion = trim($_POST['direccion']);
            $carrera = trim($_POST['listacarrera']);
            $registrado = "INSERT INTO alumnos(alumno_nom, alumno_ape,alumno_cel,alumno_dni,alumno_correo,alumno_localidad, alumno_direccion, carrera_id) 
            VALUES ('$nombre','$apellido','$celular','$dni','$correo','$localidad','$direccion',$carrera)";
           // $insertarmateria = "INSERT INTO alumnos (carrera_id) VALUES ('$id')";            

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
        <section class="banner contenedor">
            <secrion class="banner_title">
                <br><br>
                <a href="formularioalumno.php" class="comenzar">Regresar</a>
            </secrion>
            <div class="banner_img">
                <img src="laptop-support.png" alt="">
            </div>
        </section>
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
        <section class="banner contenedor">
            <secrion class="banner_title">
                <br><br>
                <a href="formularioalumno.php" class="comenzar">Regresar</a>
            </secrion>
            <div class="banner_img">
                <img src="laptop-support.png" alt="">
            </div>
        </section>
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
        <section class="banner contenedor">
            <secrion class="banner_title">
                <br><br>
                <a href="formularioalumno.php" class="comenzar">Regresar</a>
            </secrion>
            <div class="banner_img">
                <img src="laptop-support.png" alt="">
            </div>
        </section>
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
        <section class="banner contenedor">
            <secrion class="banner_title">
                <br><br>
                <a href="formularioalumno.php" class="comenzar">Regresar</a>
            </secrion>
            <div class="banner_img">
                <img src="laptop-support.png" alt="">
            </div>
        </section>
    </header>
</body>
                <?php
            }
     }
 
?>

