//CODIGO QUE RESPONDE SI SE GUARDO O NO CORECTAMENTE LOS DATOS
if ($resultado){
                ?>
<body>
    <header class="bg_animate">
        <div class="header_nav">
            <div class="contenedor">
            <h1><div style="text-align: center"><font color="#0000FF"><u>¡Datos GUARDADOS Correctamente!</u></font></div></h1>
            </div>
        </div>
        <section class="banner contenedor">
            <secrion class="banner_title">
                <br><br>
                <a href="modificarmateria.php" class="comenzar">Regresar</a>
            </secrion>
            <div class="banner_img">
            <img src="imagen_instituto.jpg" alt="">
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
                <a href="actualizarmateria.php" class="comenzar">Regresar</a>
            </secrion>
            <div class="banner_img">
            <img src="imagen_instituto.jpg" alt="">
            </div>
        </section>
    </header>
</body>
                <?php
            }       