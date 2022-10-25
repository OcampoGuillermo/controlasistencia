<html>
<?php
    include("coneccion.php");
    $id = $_GET['id'];
    $consultamateria = "SELECT * FROM materias WHERE materia_id='$id'";
    $resultadomateria = mysqli_query($conex,$consultamateria);
?>
<head>
    <title>Modificar Materia</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<header class="bg_animate">
<h1><div style="text-align: center"><font color="#FFFFFF"><u>MODIFICAR DATOS</u></font></div></h1>
        <div class="header_nav">
            <div class="contenedor">
    <tbody>
        <form name="actualizarmateria" action="materiaconfirma.php" method="post">
        <?php
            WHILE ($filas=mysqli_fetch_array($resultadomateria)) {
        ?>        
                <tr>
                <input type="hidden" name="id" size="40" maxlength="256"value=<?php echo $filas['materia_id'];?>>
                <h3><br><font color="#C0C0C0"><u>Nombre de Materia</u></h3>
                    <input type="text" name="nombre" size="40" maxlength="256"value="<?php echo $filas['materia_nom'];?>">
                <h3><br><u>Descripción de Materia</u></h3>
                    <input type="text" name="descripcion" size="40" maxlength="256"value="<?php echo $filas['materia_descripcion'];?>">
                <h3><br><u>Curso de Materia</u></h3>
                    <input type="text" name="curso" size="40" maxlength="256"value="<?php echo $filas['materia_curso'];?>">    
	            </tr>
                
            <?php } ?> 
            <input type="submit" value=" Guardar " />
            </form>     
    
    </tbody>
</table>
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

</html>
