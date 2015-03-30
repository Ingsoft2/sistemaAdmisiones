

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Colegio
 *
 * @author MiPc
 */
class Colegio {
   var $nombre;
   var $estado;
   var $ciudad;
   
   function Colegio($nombre, $estado, $ciudad) {
       $this->nombre = $nombre;
       $this->estado = $estado;
       $this->ciudad = $ciudad;
   }
   
    static function insertarColegio($pNombre, $pEstado, $pCiudad) {
        include '../conexion.php';
        $mensaje = "resultados: ";
        //Insertar Colegio en la BD
        $sql = @mysql_query("INSERT INTO colegio(nombre, estado, ciudad) "
                        . "VALUES('$pNombre','$pEstado','$pCiudad')");
        if (!$sql) {
            $mensaje.="Error Insertando Colegio en la base de datos: " . mysql_error();
        } else {
            $mensaje.="El Colegio con nombre: " . $pNombre . " fue agregado al sistema";
        }
        return $mensaje;
    }
    
    
    public function lista_colegios($tabla)    {
        
        include '../conexion.php';
        $result = mysql_query("SELECT * FROM colegio");
        echo "<table border = '3'> \n";
        echo "<tr><td>IDENTIFICACION</td><td>NOMBRE</td><td>CIUDAD</td><td>ESTADO</td><td>OPCIONES</td></tr> \n";
        while ($row = mysql_fetch_row($result)) 
                {
            echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>". "<td><a href=../colegio/procesar_colegio.php?req_col=eliminar&id=".$row[0]."><img src=../../img/colegio/elmn.png width=25px heigt=25px /></a>    <a href=../colegio/modificarColegio.php?req_col=modificar&id=".$row[0].
                    "&nombre=".$row[1]."". "&estado=".$row[2]."&ciudad=".$row[3]."> <img src=../../img/colegio/mdf.png width=25px heigt=25px /></a></td></tr> \n";
           // echo "<td><a href=editar_estudiante.php?id=".$row[$campos[0]].">Editar</a></td>";
            
        }
        echo "</table> \n";
    }
    
    
      static function eliminar_colegio($id)
    {
        include '../conexion.php';
        $mensaje = "resultados:";
        //Insertar usuario en la BD  
       
        $sql = @mysql_query("delete from colegio where id_colegio=$id");
        if (!$sql) {
            $mensaje.="Error Eliminando aspirante en la base de datos: " . mysql_error();
        } else {
            $mensaje.="El aspirante con identificacion " . $id . " fue eliminado del sistema";
            
        }
        
        return $mensaje;
       
    }

     static function editarColegio($id,$pNombre, $pEstado, $pCiudad) {
        include '../conexion.php';
        
      if ($id==NULL || $pCiudad==NULL)
      {
       $sql = "UPDATE colegio SET nombre='$pNombre', estado='$pEstado', ciudad='$pCiudad WHERE id_colegio=$id";
       
       $sql1= "update colegio set nombre='".$pNombre."'," 
               ."estado='".$pEstado."'," 
               ."ciudad= '".$pCiudad."' "
               . "where id_colegio =".$id;
               mysql_query($sql);
               
               header('Location:../gestiones/gestionarColegio.php');
      }
      else
          echo "Debe especificar un 'id'.\n";
    }
    
}
