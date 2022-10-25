<html>
<?php
    include("coneccion.php");
    $consultacarrera = "SELECT * FROM carreras";
    $resultadocarrera = mysqli_query($conex,$consultacarrera);
?> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carreras</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body background="" bgcolor="#0000FF" text="#000000" link="#0000ff" vlink="#800080" alink="#ff0000">
<h1><div style="text-align: center"><font color="#000000"><u>LISTADO DE CARRERAS</u></font></div></h1>
<secrion class="banner_title">                
    <a href="formulariocarrera.php" class="comenzar">Agregar Carrera</a>
</secrion>
<br><br>
<table width=100% height=20% border=1 align=center cellspacing=1 bgcolor=#C0C0C0 summary="">
    <thead>	
    <tr>
		<th>ID MATERIA</th>
        <th>NOMBRE DE CARRERA</th>
        <th>ACCIONES</th>
	</tr>
    </thead>
    <tbody>
        <?php
            WHILE ($filas=mysqli_fetch_array($resultadocarrera)) {
        ?>        
                <tr>
		            <td><?php echo $filas['carrera_id'];?></td>
		            <td><?php echo $filas['carrera_nom'];?></td>
                    <td>
                    <a href="actualizarcarrera.php?id=<?php echo $filas['carrera_id'];?>"> Modificar</a>
                    <a href="eliminarcarrera.php?id=<?php echo $filas['carrera_id'] ?>"class="identificacion_eliminar"> Eliminar</a>
                    </td>
	            </tr>
            <?php } ?>      
            <script src="confirmacion.js"></script>
    </tbody>
</table>
                <br><br>
                <secrion class="banner_title">                
                    <a href="modificaciones.php" class="comenzar">Atras</a>
                </secrion>
                <br><br>
</body>

</html>