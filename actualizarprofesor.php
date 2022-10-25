<html>
<?php
    include("coneccion.php");
    $id = $_GET['id'];
    $consultaprofesor = "SELECT * FROM profesores WHERE profesor_id='$id'";
    $resultadoprofesor = mysqli_query($conex,$consultaprofesor);
?>
<head>
    <title>Modificar Profesor</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<header class="bg_animate">
<h1><div style="text-align: center"><font color="#FFFFFF"><u>MODIFICAR DATOS</u></font></div></h1>
        <div class="header_nav">
            <div class="contenedor">  
    <tbody>
        <form name="actualizarprofesor" action="profesorconfirma.php" method="post">
        <?php
            WHILE ($filas=mysqli_fetch_array($resultadoprofesor)) {
        ?>        
                <tr>
                <input type="hidden" name="id" size="40" maxlength="256"value=<?php echo $filas['profesor_id'];?>>
                <h3><br><font color="#C0C0C0"><u>Nombre de Profesor</u></h3>
                    <input type="text" name="nombre" size="40" maxlength="256"value="<?php echo $filas['profesor_nom'];?>">
                <h3><br><u>Apellido de Profesor</u></h3>
                    <input type="text" name="apellido" size="40" maxlength="256"value="<?php echo $filas['profesor_ape'];?>">
                <h3><br><u>Número de celular de Profesor</u></h3>
                    <input type="text" name="celular" size="40" maxlength="256"value="<?php echo $filas['profesor_cel'];?>">    
                <h3><br><u>Número de Documento de Profesor</u></h3>
                    <input type="text" name="dni" size="40" maxlength="256"value="<?php echo $filas['profesor_dni'];?>">
		        <h3><br><u>Correo de Profesor</u></h3>
                    <input type="text" name="correo" size="40" maxlength="256"value="<?php echo $filas['profesor_correo'];?>">
		        <h3><br><u>Localidad de Profesor</u></h3>    
                    <input type="text" name="localidad" size="40" maxlength="256"value="<?php echo $filas['profesor_localidad'];?>">
		        <h3><br><u>Dirección de Profesor</u></h3>
                    <input type="text" name="direccion" size="40" maxlength="256"value="<?php echo $filas['profesor_direccion'];?>">
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
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <a href="modificarprofesor.php" class="comenzar">Atras</a>
            </secrion>
            <div class="banner_img">
            <img src="imagen_instituto.jpg" alt="">
            </div>
        </section>
    </header>
</body>

</html>
