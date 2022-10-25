<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ocampo Guillermo</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<header class="bg_animate">
        <div class="header_nav">
            <div class="contenedor">
<form name="ingresarprofesor" action="registrarprofesor.php" method="post">
<h3>Nombre de Profesor</h3>
    <input type="text" name="nombre" size="40" maxlength="256"placeholder="Su Nombre">
<h3>Apellido de Profesor</h3>
    <input type="text" name="apellido" size="40" maxlength="256"placeholder="Su Apellido">
<h3>Número de celular de Profesor</h3>
    <input type="text" name="celular" size="40" maxlength="256"placeholder="Cod.Area + Numero Sin Guión">
<h3>Número de Documento de Profesor</h3>
    <input type="text" name="dni" size="40" maxlength="256"placeholder="Su DNI Sin Puntos">
<h3>Correo de Profesor</h3>
    <input type="text" name="correo" size="40" maxlength="256" placeholder="Su correo">
<h3>Localidad de Profesor</h3>    
<input type="text" name="localidad" size="40" maxlength="256"placeholder="Su Localidad">
<h3>Dirección de Profesor</h3>
    <input type="text" name="direccion" size="40" maxlength="256"placeholder="Su Direccion o Calle">
<input type="submit" name="enviar" />
</form>
            </div>
        </div>
        <section class="banner contenedor">
            <secrion class="banner_title">
                <br><br><br><br>
                <a href="modificarprofesor.php" class="comenzar">Atras</a>
            </secrion>
            <div class="banner_img">
            <img src="imagen_instituto.jpg" alt="">
            </div>
        </section>
    </header>
</body>
<?php
    include("registrarprofesor.php");
?>
</html>
