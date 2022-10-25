<html>
<?php
    include("coneccion.php");
    $consultamateria = "SELECT * FROM materias";
    $resultadomateria = mysqli_query($conex,$consultamateria);
?> 
<head>
    <title>Materias</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body background="" bgcolor="#0000FF" text="#000000" link="#0000ff" vlink="#800080" alink="#ff0000">
<h1><div style="text-align: center"><font color="#000000"><u>LISTADO DE MATERIAS</u></font></div></h1>
<secrion class="banner_title">                
    <a href="formulariomateria.php" class="comenzar">Agregar Materia</a>
</secrion>
<br><br>
<table width=100% height=20% border=1 align=center cellspacing=1 bgcolor=#C0C0C0 summary="">
    <thead>	
    <tr>
		<th>ID MATERIA</th>
        <th>NOMBRE DE MATERIA</th>
        <th>DESCRIPCION</th>
        <th>CURSO DE MATERIA</th>
        <th>ACCIONES</th>
	</tr>
    </thead>
    <tbody>
        <?php
            WHILE ($filas=mysqli_fetch_array($resultadomateria)) {
        ?>        
                <tr>
		            <td><?php echo $filas['materia_id'];?></td>
		            <td><?php echo $filas['materia_nom'];?></td>
		            <td><?php echo $filas['materia_descripcion'];?></td>
		            <td><?php echo $filas['materia_curso'];?></td>
                    <td>
                    <a href="actualizarmateria.php?id=<?php echo $filas['materia_id'];?>"> Modificar</a>
                    <a href="eliminarmateria.php?id=<?php echo $filas['materia_id'] ?>"class="identificacion_eliminar"> Eliminar</a>
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