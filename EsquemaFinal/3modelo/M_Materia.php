<?php

/*
 * Description of M_Materia
 *
 * @author manuel
 */

include("conexion.php");

class Materia {
    
    
private $materia_id;
private $materia_nom;
private $materia_obj;
private $materia_des;     

function __construct($materia_id, $materia_nom, $materia_obj, $materia_des) {
    $this->materia_id = $materia_id;
    $this->materia_nom = $materia_nom;
    $this->materia_obj = $materia_obj;
    $this->materia_des = $materia_des;
}

 public function __destruct() {
        
    }
    
   
      public function insertarMateria() {
        $consulta = "insert into t_materia (id_materia,nom_materia,objetivo_materia,desc_materia) values ('$this->materia_id','$this->materia_nom','$this->materia_obj','$this->materia_des')";

        if (mysql_query($consulta)) {
            echo"<script language='javascript'> alert('Registro Exitoso ');  </script>";
            echo"<script language='javascript'>location.href=\"../vistas/listarMaterias.php\"   </script>";
        } else {
            /* echo mysql_error(); */
            echo"<script language='javascript'>location.href=\"../vistas/ingresarColaborador.php\"</script>";
        }
    }
    
    
    
    
  public function modificar()
          {                                                                                                                                                                                                                       
        $consulta = "update t_materia set id_materia='$this->materia_id',nom_materia='$this->materia_nom',objetivo_materia='$this->materia_obj',desc_materia='$this->materia_des' where(id_materia='$this->materia_id')";
        if (mysql_query($consulta)) {
            echo"<script language='javascript'> alert('La Actualizacion es un EXITO');  </script>";
            echo"<script language='javascript'> location.href=\"../vistas/listarMaterias.php\" </script>";
            
        } else {
             echo"<script language='javascript'> alert('No fue posible la actualizacion');  </script>";
           
        }
    }

}
