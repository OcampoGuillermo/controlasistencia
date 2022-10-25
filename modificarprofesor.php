<html>
<?php
    include("coneccion.php");
    $consultaprofesor = "SELECT * FROM profesores";
    $resultadoprofesor = mysqli_query($conex,$consultaprofesor);
?> 
<head>
    <title>Profesores</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body background="" bgcolor="#0000FF" text="#000000" link="#0000ff" vlink="#800080" alink="#ff0000">
<h1><div style="text-align: center"><font color="#000000"><u>LISTADO DE PROFESORES</u></font></div></h1>
<secrion class="banner_title">                
    <a href="formularioprofesor.php" class="comenzar">Agregar Profesor</a>
</secrion>
<br><br>
<table width=100% height=20% border=1 align=center cellspacing=1 bgcolor=#C0C0C0 summary="">
    <thead>	
    <tr>
		<th>ID PROFESOR</th>
        <th>APELLIDO</th>
        <th>NOMBRE</th>
        <th>N° CELULAR</th>
        <th>N° D.N.I.</th>
        <th>EMAIL</th>
        <th>LOCALIDAD</th>
        <th>DIRECCION</th>
        <th>ACCIONES</th>
	</tr>
    </thead>
    <tbody>
        <?php
            WHILE ($filas=mysqli_fetch_array($resultadoprofesor)) {
        ?>        
                <tr>
		            <td><?php echo $filas['profesor_id'];?></td>
		            <td><?php echo $filas['profesor_ape'];?></td>
		            <td><?php echo $filas['profesor_nom'];?></td>
		            <td><?php echo $filas['profesor_cel'];?></td>
		            <td><?php echo $filas['profesor_dni'];?></td>
		            <td><?php echo $filas['profesor_correo'];?></td>
		            <td><?php echo $filas['profesor_localidad'];?></td>
		            <td><?php echo $filas['profesor_direccion'];?></td>
                    <td>
                    <a href="actualizarprofesor.php?id=<?php echo $filas['profesor_id'];?>"> Modificar</a>
                    <a href="eliminarprofesor.php?id=<?php echo $filas['profesor_id'] ?>"class="identificacion_eliminar"> Eliminar</a>
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