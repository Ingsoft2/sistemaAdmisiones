<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <!-- from encargado de la gestion de los aspirantes -->
        <link type="text/css" rel="stylesheet" href="../../css/style.css">
        
        <meta charset="UTF-8">
        <title>Gestionar Aspirante</title>
        
    </head>
    <?php include ("Header.php"); ?>
    <body>
        <div id="section">
            <div id="info"> 
                
                <a href="../aspirante/agregarAspirante.php"><img src="../../img/aspirante/agregarAspirante.png" width="100" height="90">Agregar Aspirante</a>
                <a href="../aspirante/buscarAspirante.php"><img src="../../img/aspirante/buscarAspirante.png" width="100" height="90">Buscar Aspirante</a> 
            <br> 
            <br> 
         <?php include '../conexion.php';
                include '../aspirante/Aspirante.php';
                  Aspirante::lista_aspirante('aspirante');
                ?>
               </div> 
        </div>
    <?php
include("fooder.php"); 
?>
</html>
