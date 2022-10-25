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
    if (strlen($_POST['nombre'])>= 1) {
            $nombre = trim($_POST['nombre']);
            $registrado = "INSERT INTO carreras(carrera_nom) VALUES ('$nombre')";
            
            $verificar_nombre = mysqli_query($conex,"SELECT * FROM carreras WHERE carrera_nom='$nombre'");
            if(mysqli_num_rows($verificar_nombre) > 0){
                ?>
<body>
<header class="bg_animate">
        <div class="header_nav">
            <div class="contenedor">
            <h3><div style="text-align: center"><font color="#FF0000"><u>¡El Nombre de Carrera ya se Encuentra Registrado, Por Favor Compruebe o Ingrese Otro!</u></font></div></h3>
            </div>
        </div>
        <section class="banner contenedor">
            <secrion class="banner_title">
                <br><br>
                <a href="formulariocarrera.php" class="comenzar">Regresar</a>
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
                <a href="formulariocarrera.php" class="comenzar">Regresar</a>
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
                <a href="formulariocarrera.php" class="comenzar">Regresar</a>
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
                <a href="formulariocarrera.php" class="comenzar">Regresar</a>
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

