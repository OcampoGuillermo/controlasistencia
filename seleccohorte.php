<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selección Asistencia 3</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<header class="bg_animate">
        <div class="header_nav">
            <div class="contenedor">

<html>
<?php
    include("coneccion.php");
    $idmateria = $_GET['listamateria'];
    $listamateria = "SELECT DISTINCT materia_curso FROM materias ORDER BY materia_curso ASC";
    $resultadolista = mysqli_query($conex,$listamateria);
?>  

    <tbody>
    <div>
    <br>
    <h1><div><font color="#C0C0C0"><u>SELECCIONE LA CURSADA O COHORTE: </u></font></div></h1>
    <br>
        <form name="siguiente1" action="asistencialista.php" method="post">
        <select name="listacurso"style="width:70%">
        <?php
            WHILE ($filas=mysqli_fetch_array($resultadolista)) {
            $idmateria=$filas['materia_id'];
            $cursomateria=$filas['materia_curso'];
            
        ?>        

 	        <option value="<?php echo $idmateria?>"><?php echo $cursomateria?></option>	            

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
                <a href="selecmateria.php" class="comenzar">Atras</a>
            </secrion>
            <div class="banner_img">
            <img src="imagen_instituto.jpg" alt="">
            </div>
        </section>
    </header>
</body>
<?php
    include("seleccarrera.php");
    include("selecmateria.php");    
?>