<html>
    <head>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <meta charset="UTF-8">
        <title>Gestionar Programa</title>
        <?php
include("Header.php"); 
?>
        <link type="text/css" rel="stylesheet" href="css/style.css">
    </head>
    <?php include ("Header.php"); ?>
    <body>
        <br>
        <form action="">
            <table border="1">
                <thead>
                    <tr align ="center">
                        
                        <th colspan="2">Datos Programa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nombre del programa:</td>
                        <td><input type="text" name="txt_nom_prog" value="" required/></td>
                    </tr>
                    <tr>
                        <td>Fecha de registro:</td>
                        <td><input type="date" name="txt_nombres" value="" required=""/></td>
                    </tr>
                    <tr>
                        <td>Estado del programa:</td>
                        <td><select>
                    <option>Acreditacion Alta</option>
                    <option>Acreditacion Media</option>
                    <option>Acreditacion Baja</option>
                </select></td>
                        
                    </tr>
                    <tr>
                        <td>Numero de admitidos:</td>
                        <td><input type="text" name="txt_num_admitidos" value="" required=""td>
                    </tr>                                                   
                </tbody>
            </table>
            <br>
            <table>
                <tr>
                    <td>
            <input type="submit" value="Enviar" class="boton"/>
            </td>
            </tr>
            </table>

        </form>
    </body>
    <?php
include("fooder.php"); 
?>
</html>