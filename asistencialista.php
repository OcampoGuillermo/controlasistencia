<html>
<head>
    <title>TOMAR ASISTENCIA</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="estilotabla.css">

</head>
<?php
    include("coneccion.php");
    $consultaasistencia = "SELECT alumno_ape, alumno_nom FROM alumnos";
    $resultadoasistencia = mysqli_query($conex,$consultaasistencia);
?> 


<body background="" bgcolor="#0000FF" text="#000000" link="#0000ff" vlink="#800080" alink="#ff0000">
<h1><div style="text-align: center"><font color="#000000"><u>TOMAR ASISTENCIA</u></font></div></h1>
<h1><div style="text-align: center"><font color="#000000"><u>LISTADO DE ALUMNOS</u></font></div></h1>
<br><br>
<div class="container">
<table>
    
    <thead>	
    <tr>
		
        <th>APELLIDO</th>
        <th>NOMBRE</th>
        <th>ACCIONES</th>
	</tr>
    </thead>
    <tbody>
        <?php
            WHILE ($filas=mysqli_fetch_array($resultadoasistencia)) {
        ?>        
                <tr>
		            
		            <td><?php echo $filas['alumno_ape'];?></td>
		            <td><?php echo $filas['alumno_nom'];?></td>
                    <td>
                    <form name="check" action="registrarasistencia.php" method="post">
	                    <input type="checkbox" name="checkasistencia" value="Presente"> Presente
	                    <input type="checkbox" name="checkasistencia" value="Ausente"> Ausente
                    </form>
                    </td>
	            </tr>
            <?php } ?>     
           
            <script src="confirmacion.js"></script>
    </tbody>
</table>
</div>
                    <br><br>
                    <div style="text-align: right">
                    <form name="guardar" action="registrarasistencia.php" method="post">
                    <input type="submit" name="guardarasistencia" value="Guardar"><br> 
                    </form></div>
                <secrion class="banner_title">                
                    <a href="seleccohorte.php" class="comenzar">Atras</a>
                </secrion>
                    <br><br>
</body>

</html>