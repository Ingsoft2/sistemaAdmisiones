<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head> <!-- from encargado de la gestion de las facultades -->
        <link type="text/css" rel="stylesheet" href="../../css/style.css">
        
        <meta charset="UTF-8">
        <title>Gestionar Facultad</title>
        
    </head>
    <?php include ("./Header.php"); ?>
    <body>
        <div id="section">
            <div id="info"> 
                <a href="../facultad/agregarFacultad.php"><img src="../../img/facultad/agregarFacultad.png" width="100" height="80">Agregar facultad</a>
                <a href="../facultad/buscarFacultad.php"><img src="../../img/facultad/buscarFacultad.png" width="100" height="80">Buscar Facultad</a> 
                <br> 
                <br> 
             <?php include '../conexion.php';
                include '../facultad/Facultad.php';
                  Facultad::lista_facultad('facultad');
                ?>
               </div> 
        </div>
    </body>
    <?php
include("./fooder.php"); 
?>
</html>
