<html>
<?php
    include("coneccion.php");
    $id = $_GET['id'];
    $consultacarrera = "SELECT * FROM carreras WHERE carrera_id='$id'";
    $resultadocarrera = mysqli_query($conex,$consultacarrera);
?>
<head>
    <title>Modificar Carrera</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<header class="bg_animate">
<h1><div style="text-align: center"><font color="#FFFFFF"><u>MODIFICAR DATOS</u></font></div></h1>
        <div class="header_nav">
            <div class="contenedor">  
    <tbody>
        <form name="actualizarcarrera" action="carreraconfirma.php" method="post">
        <?php
            WHILE ($filas=mysqli_fetch_array($resultadocarrera)) {
        ?>        
                <tr>
                <input type="hidden" name="id" size="40" maxlength="256"value=<?php echo $filas['carrera_id'];?>>
                <h3><br><font color="#C0C0C0"><u>Nombre de Carrera</u></h3>
                    <input type="text" name="nombre" size="40" maxlength="256"value="<?php echo $filas['carrera_nom'];?>">    
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
                <a href="modificarcarrera.php" class="comenzar">Atras</a>
            </secrion>
            <div class="banner_img">
            <img src="imagen_instituto.jpg" alt="">
            </div>
        </section>
    </header>
</body>

</html>
