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
<form name="ingresarmateria" action="registrarmateria.php" method="post">
    <h3>Nombre de Materia</h3>
        <input type="text" name="nombre" size="40" maxlength="256"placeholder="Nombre">
    <h3>Descripción de Materia</h3>
        <input type="text" name="descripcion" size="40" maxlength="256"placeholder="Descripcion">
    <h3>Año de Materia</h3>
        <input type="text" name="ano" size="40" maxlength="256"placeholder="Año">
        <?php
    include("coneccion.php");
    $listacarrera = "SELECT * FROM carreras";
    $resultadolista = mysqli_query($conex,$listacarrera);
?>  

    <tbody>
    <h3>PERTENECE A:</h3>
        <select name="listacarrera">
        <?php
            WHILE ($filas=mysqli_fetch_array($resultadolista)) {
            $idcarrera=$filas['carrera_id'];
            $nombrecarrera=$filas['carrera_nom'];
            
        ?>        

 	        <option value="<?php echo $idcarrera?>"><?php echo $nombrecarrera?></option>	            

            <?php } ?>
        </select>
            <input type="submit" name="enviar" />
    </tbody>
</form>
        </div>
            </div>
        <section class="banner contenedor">
            <secrion class="banner_title">
                <br><br>
                <a href="modificarmateria.php" class="comenzar">Atras</a>
            </secrion>
            <div class="banner_img">
            <img src="imagen_instituto.jpg" alt="">
            </div>
        </section>
    </header>
</body>
<?php
    include("registrarmateria.php");
?>
</html>