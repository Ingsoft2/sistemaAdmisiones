<?php
include '../conexion.php';
$sql ="SELECT * FROM aspirante";
$consulta=  mysql_query($sql); 
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="../../css/style.css">
        <link type="text/css" rel="stylesheet" href="../../css/StyleColegio.css">
        <title></title>
    </head>
    <?php  include ("./Header.php");?>
    <body>
        <div id="section">
        <br>
        <form method="POST" enctype="multipart/form-data" action="procesar_aspirante.php" >
            <table border="1">
                <thead>
                    <tr align ="center">                       
                        <th colspan="10">Lista de aspirantes selecciondos por programa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Identificación</td>
                        <td>Nombres</td>
                        <td>Apellidos</td>
                        <td>Fecha de nacimiento</td>
                        <td>Lugar de nacimiento</td>
                        <td>Género</td>
                        <td>Colegio</td>
                        <td>Promedio</td>
                        <td>Foto</td>
                        <td>Programa</td>
                    </tr>                    
                </tbody>
            </table>
            
            <table>
                <tr>
                    <td>
            <input type="submit" value="Enviar" class="boton"/>
            <input type="hidden" value="Enviar" name="req_aspP">
            </td>
            </tr>
            </table>

        </form>
        </div>
    </body>
<?php include("./fooder.php");?>
</html>