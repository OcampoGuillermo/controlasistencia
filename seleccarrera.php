<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selección Asistencia 1</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<header class="bg_animate">
        <div class="header_nav">
            <div class="contenedor">

<html>
<?php
    include("coneccion.php");
    $listacarrera = "SELECT * FROM carreras ORDER BY carrera_nom ASC";
    $resultadolista = mysqli_query($conex,$listacarrera);
?>  

    <tbody>
    <div>
    <br>
    <h1><div><font color="#C0C0C0"><u>SELECCIONE LA CARRERA</u></font></div></h1>
    <br>
        <form name="siguiente1" action="selecmateria.php" method="get">
        <select name="listacarrera"style="width:100%">
        <?php
            WHILE ($filas=mysqli_fetch_array($resultadolista)) {
            $idcarrera=$filas['carrera_id'];
            $nombrecarrera=$filas['carrera_nom'];
            
        ?>        

 	        <option value="<?php echo $idcarrera?>"><?php echo $nombrecarrera?></option>	            

            <?php } ?>
        </select>
        </div>
        
        <input type="submit" name="enviar" value=" SIGUIENTE " />
        </form>
           
    
    </tbody>

</form>
</div>
        </div>
        <section class="banner contenedor">
            <secrion class="banner_title">
                <br><br><br><br><br><br>
                <a href="principal.php" class="comenzar">Atras</a>
            </secrion>
            <div class="banner_img">
            <img src="imagen_instituto.jpg" alt="">
            </div>
        </section>
    </header>
</body>

</html>