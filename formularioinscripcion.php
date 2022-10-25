<html>
<?php
    include("coneccion.php");
    //$id = $_GET['id'];
    $lista = "SELECT * FROM alumnos";
    $resultadolista = mysqli_query($conex,$lista);
    $lista1 = "SELECT * FROM materias";
    $resultadolista1 = mysqli_query($conex,$lista1);
?>  

    <tbody>
    <div style="text-align: center"><u><b><font size="+6">SECCIÓN DE INSCRIPCIONES A MATERIAS</font></b></u></div><br><br>
    <h3>SELECCIONE SU Nombre</h3>
        <form name="formularioinscripcion" action="formularioinscripcion.php" method="post">
        <select name="listaalumnos">
        <?php
            WHILE ($filas=mysqli_fetch_array($resultadolista)) {
                $idalumno=$filas['alumno_id'];
                $nombrealumno=$filas['alumno_nom'];
                $apealumno=$filas['alumno_ape'];
            ?>        
    
                    <option value="<?php echo $idalumno?>"><?php echo $apealumno?>, <?php echo $nombrealumno?></option> <br><br>   
             
            <?php } ?>
        </select>
           
        </form> 
        <br>
        <h3>SELECCIONE EL Nombre de la Materia</h3>
        <form name="formularioinscripcion" action="formularioinscripcion.php" method="post">
        <select name="listamaterias">
        <?php
            WHILE ($filas1=mysqli_fetch_array($resultadolista1)) {
            $idmateria=$filas1['materia_id'];
            $nombremateria=$filas1['materia_nom'];
        ?>        

                <option value="<?php echo $idmateria?>"><?php echo $nombremateria?></option>   
             
            <?php } ?>
            <input type="submit" name="enviar" value=" Guardar " />
            </select>

</tbody>

</form>

<?php
include("registraralumno.php");
?>
</html>
