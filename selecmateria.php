<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selección Asistencia 2</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<header class="bg_animate">
        <div class="header_nav">
            <div class="contenedor">

<html>
<?php
    include("coneccion.php");
    $idcarrera = $_GET['listacarrera'];
    $listamateria = "SELECT * FROM materias ORDER BY materia_nom ASC";
    $resultadolista = mysqli_query($conex,$listamateria);
    
?>  
<?php echo $idcarrera?>
    <tbody>
    <div>
    <br>
    <h1><div><font color="#C0C0C0"><u>SELECCIONE LA MATERIA: </u></font></div></h1>
    <br>
        <form name="siguiente1" action="seleccohorte.php" method="post">
        <select name="listamateria"style="width:100%">
        <?php
            WHILE ($filas=mysqli_fetch_array($resultadolista)) {
            $idmateria=$filas['materia_id'];
            $nombremateria=$filas['materia_nom'];
            
        ?>        

 	        <option value="<?php echo $idmateria?>"><?php echo $nombremateria?></option>	            

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
                <a href="seleccarrera.php" class="comenzar">Atras</a>
            </secrion>
            <div class="banner_img">
            <img src="imagen_instituto.jpg" alt="">
            </div>
        </section>
    </header>
</body>

</html>
<?php
    include("seleccarrera.php");    
?>