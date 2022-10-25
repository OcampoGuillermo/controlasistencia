<?php /* Created on: 7/6/2022 */ ?>

<?php
$nombreservidor = "localhost";
$nombreusuario = "root";
$contra = "";
$nombasedatos = "nuevadbcontrolasis";

$conex = new mysqli($nombreservidor, $nombreusuario, $contra, $nombasedatos);

if ($conex) {
    echo"";
   } ELSE {
    echo "HA OCURRIDO UN ERROR de conección a DB";
   }
?>