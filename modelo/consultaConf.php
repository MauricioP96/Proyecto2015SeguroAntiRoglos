<?php 
require ("../modelo/coneccionBD.php");
$query = $cn->prepare("SELECT * FROM Configuracion");
$query->execute(); 
$configuraciones = $query->fetchAll();
?>