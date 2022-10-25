<html>
<?php
    include("coneccion.php");
    $id = $_GET['id'];
    $consultaalumno = "SELECT * FROM alumnos WHERE alumno_id='$id'";
    $resultadoalumno = mysqli_query($conex,$consultaalumno);
?>  
<head>
    <title>Modificar Alumno</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<header class="bg_animate">
    <h1><div style="text-align: center"><font color="#FFFFFF"><u>MODIFICAR DATOS</u></font></div></h1>
        <div class="header_nav">
            <div class="contenedor">
    <tbody>
        <form name="actualizaralumno" action="editaralumnoconfirma.php" method="post">
        <?php
            WHILE ($filas=mysqli_fetch_assoc($resultadoalumno)) {
        ?>        
                
                <input type="hidden" name="id" size="40" maxlength="256"value=<?php echo $filas['alumno_id'];?>>
                <h3><font color="#C0C0C0"><u>Nombre de Alumno</u></h3>
                    <input type="text" name="nombre" size="40" maxlength="256"value="<?php echo $filas['alumno_nom'];?>">
                <h3><br><u>Apellido de Alumno</u></h3>
                    <input type="text" name="apellido" size="40" maxlength="256"value="<?php echo $filas['alumno_ape'];?>">
                <h3><br><u>Número de celular de Alumno</u></h3>
                    <input type="text" name="celular" size="40" maxlength="256"value="<?php echo $filas['alumno_cel'];?>">    
                <h3><br><u>Número de Documento de Alumno</u></h3>
                    <input type="text" name="dni" size="40" maxlength="256"value="<?php echo $filas['alumno_dni'];?>">
		        <h3><br><u>Correo de Alumno</u></h3>
                    <input type="text" name="correo" size="40" maxlength="256"value="<?php echo $filas['alumno_correo'];?>">
		        <h3><br><u>Localidad de Alumno</u></h3>   
                    <input type="text" name="localidad" size="40" maxlength="256"value="<?php echo $filas['alumno_localidad'];?>">
		        <h3><br><u>Dirección de Alumno</u></h3>
                    <input type="text" name="direccion" size="40" maxlength="256"value="<?php echo $filas['alumno_direccion'];?>">
	            
                
            <?php } mysqli_free_result($resultadoalumno);?> 
            <input type="submit" value=" Guardar " />
            </form>     
    
    </tbody>
</table>
</div>
        </div>
        <section class="banner contenedor">
            <secrion class="banner_title">
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <a href="modificaralumno.php" class="comenzar">Atras</a>
            </secrion>
            <div class="banner_img">
            <img src="imagen_instituto.jpg" alt="">
            </div>
        </section>
    </header>
</body>
</html>
