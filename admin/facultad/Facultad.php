<?php

/**
 * Description of Aspirante
 *
 * @author MiPc
 */
class Facultad {

    var $nombre;
    var $fechaCreacion;
 
/**
 * inicialisador de facultad
 * @param type $nombre
 * @param type $fechaCreacion
 */
    function Facultad($nombre, $fechaCreacion)
    {
        $this->nombre = $nombre;
        $this->fechaCreacion = $fechaCreacion;
    }

    /**
     * insertar facultad a la base de datos
     * @param type $pNombre
     * @param type $pFechaCreacion
     * @return string
     */
    static function insertarFacultad($pNombre, $pFechaCreacion) {
        include '../conexion.php';
        $mensaje = "resultados: ";
        //Insertar facultad en la BD
        $sql = @mysql_query("INSERT INTO facultad(nombre, fechaCreacion) "
                        . "VALUES('$pNombre','$pFechaCreacion')");
        if (!$sql) {
            $mensaje.="Error Insertando Facultad en la base de datos: " . mysql_error();
        } else {
            $mensaje.="La facultad con nombre: " . $pNombre . " fue agregado al sistema";
        }
        return $mensaje;
    }

    /**
     * lista la tabla de facultades para ser visualizada en la gestion
     * @param type $tabla
     */
    public function lista_facultad($tabla) {
        
        include '../conexion.php';
        $result = mysql_query("SELECT * FROM facultad");
        echo "<table border = '3'> \n";
        echo "<tr><td>IDENTIFICACION</td><td>NOMBRE</td><td>FECHA CREACION</td><td>OPCIONES</td></tr> \n";
        while ($row = mysql_fetch_row($result)) 
                {
            echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td>". "<td><a href=../facultad/procesar_facultad.php?req_fac=eliminar&id=".$row[0].">Borrar</a><a href=../facultad/modificarFacultad.php?req_fac=modificar&id=".$row[0].
                    "&nombre=".$row[1]."". "&fechaCreacion=".$row[2]."> Modificar</a></td></tr> \n";
        
        }
        echo "</table> \n";
    }
    
    
    /**
     * eliminar facultad de la base de datos 
     * @param type $id
     * @return string
     */
    static function eliminar_facultad($id)
    {
        include '../conexion.php';
        $mensaje = "resultados:";
        //Eliminar facultad de la BD       
        $sql = @mysql_query("DELETE FROM facultad WHERE id_facultad=$id");
        if (!$sql) {
            $mensaje.="Error Eliminando facultad en la base de datos: " . mysql_error();
        } else {
            $mensaje.="La facultad con " . $id . " fue eliminada del sistema";
        }
        return $mensaje;
    }
    
    /**
     * edita la facultad elegida en la base de datos
     * @param type $id
     * @param type $pNombre
     * @param type $pFechaCreacion
     */
     static function editarFacultad($id,$pNombre, $pFechaCreacion) {
         include_once '../conexion.php';
        
      if ($id==NULL || $pFechaCreacion==NULL)
      {
       $sql = "UPDATE facultad SET nombre='$pNombre', fechaCreacion='$pFechaCreacion' WHERE id_facultad=$id";
       
       $sql1= "update facultad set nombre='".$pNombre."'," 
               ."fechaCreacion='".$pFechaCreacion."'," 
               . "where id_facultad =".$id;
               mysql_query($sql);      
               header('Location:../gestiones/gestionarFacultad.php');
      }
      else
          echo "Debe especificar un 'id'.\n";
    }
    
}
