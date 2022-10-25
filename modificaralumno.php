<html>
<head>
    <title>ALUMNOS</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<?php
    include("coneccion.php");
    $consultaalumno = "SELECT * FROM alumnos ORDER BY alumno_ape ASC";
    $resultadoalumno = mysqli_query($conex,$consultaalumno);
?> 


<body background="" bgcolor="#0000FF" text="#000000" link="#0000ff" vlink="#800080" alink="#ff0000">
<h1><div style="text-align: center"><font color="#000000"><u>LISTADO DE ALUMNOS</u></font></div></h1>
<secrion class="banner_title">                
    <a href="formularioalumno.php" class="comenzar">Agregar Alumno</a>
</secrion>
<br><br>
<table width=100% height=30% border=1 align=center cellspacing=1 bgcolor=#C0C0C0 summary="">
    
    <thead>	
    <tr>
		<th>ID ALUMNO</th>
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
            WHILE ($filas=mysqli_fetch_array($resultadoalumno)) {
        ?>        
                <tr>
		            <td><?php echo $filas['alumno_id'];?></td>
		            <td><?php echo $filas['alumno_ape'];?></td>
		            <td><?php echo $filas['alumno_nom'];?></td>
		            <td><?php echo $filas['alumno_cel'];?></td>
		            <td><?php echo $filas['alumno_dni'];?></td>
		            <td><?php echo $filas['alumno_correo'];?></td>
		            <td><?php echo $filas['alumno_localidad'];?></td>
		            <td><?php echo $filas['alumno_direccion'];?></td>
                    <td>
                    <a href="actualizaralumno.php?id=<?php echo $filas['alumno_id'];?>"> Modificar</a>
                    <a href="eliminaralumno.php?id=<?php echo $filas['alumno_id'] ?>"class="identificacion_eliminar"> Eliminar</a>
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