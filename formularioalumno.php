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
<form name="ingresaralumno" action="registraralumno.php" method="post">
    <h3>Apellido de Alumno</h3>
        <input type="text" name="apellido" size="40" maxlength="256"placeholder="Su Apellido">
    <h3>Nombre de Alumno</h3>
        <input type="text" name="nombre" size="40" maxlength="256"placeholder="Su Nombre">
    <h3>Número de celular de Alumno</h3>
        <input type="text" name="celular" size="40" maxlength="256"placeholder="Cod.Area + Numero Sin Guión">
    <h3>Número de Documento de Alumno</h3>
        <input type="text" name="dni" size="40" maxlength="256"placeholder="Su DNI Sin Puntos">
    <h3>Correo de Alumno</h3>
        <input type="text" name="correo" size="40" maxlength="256" placeholder="Su correo">
    <h3>Localidad de Alumno</h3>    
        <input type="text" name="localidad" size="40" maxlength="256"placeholder="Su Localidad">
    <h3>Dirección de Alumno</h3>
        <input type="text" name="direccion" size="40" maxlength="256"placeholder="Su Direccion o Calle"><br><br>
<html>
<?php
    include("coneccion.php");
    $listacarrera = "SELECT * FROM carreras";
    $resultadolista = mysqli_query($conex,$listacarrera);
?>  

    <tbody>
    <h3>NOMBRE DE CARRERA A CURSAR</h3>
        <select name="listacarrera">
        <?php
            WHILE ($filas=mysqli_fetch_array($resultadolista)) {
            $idcarrera=$filas['carrera_id'];
            $nombrecarrera=$filas['carrera_nom'];
            
        ?>        

 	        <option value="<?php echo $idcarrera?>"><?php echo $nombrecarrera?></option>	            

            <?php } ?>
        </select>

            <input type="submit" name="enviar" value=" Guardar " />
           
    
    </tbody>

</form>
</div>
        </div>
        <section class="banner contenedor">
            <secrion class="banner_title">
                <br><br><br><br><br><br><br><br><br><br><br><br>
                <a href="modificaralumno.php" class="comenzar">Atras</a>
            </secrion>
            <div class="banner_img">
            <img src="imagen_instituto.jpg" alt="">
            </div>
        </section>
    </header>
</body>
<?php
    include("registraralumno.php");
?>
</html>