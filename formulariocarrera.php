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
<form name="ingresarcarrera" action="registrarcarrera.php" method="post">
<h3>Nombre de Carrera</h3>
    <input type="text" name="nombre" size="40" maxlength="256"placeholder="Nombre de la Carrera">
<input type="submit" name="enviar" />
</form>
        </div>
            </div>
        <section class="banner contenedor">
            <secrion class="banner_title">
                <br><br>
                <a href="modificarcarrera.php" class="comenzar">Atras</a>
            </secrion>
            <div class="banner_img">
            <img src="imagen_instituto.jpg" alt="">
            </div>
        </section>
    </header>
</body>
<?php
    include("registrarcarrera.php");
?>
</html>