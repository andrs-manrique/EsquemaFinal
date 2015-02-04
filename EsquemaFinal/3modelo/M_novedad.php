<?php

include ("conexion.php");

class novedad {

    private $id_novedad;
    private $fecha_novedad;
    private $titulo_novedad;
    private $imagen_novedad;
    private $desc_novedad;
    private $contenido_novedad;
    
    function __construct($id_novedad, $fecha_novedad, $titulo_novedad, $imagen_novedad, $desc_novedad, $contenido_novedad) {
        $this->id_novedad = $id_novedad;
        $this->fecha_novedad = $fecha_novedad;
        $this->titulo_novedad = $titulo_novedad;
        $this->imagen_novedad = $imagen_novedad;
        $this->desc_novedad = $desc_novedad;
        $this->contenido_novedad = $contenido_novedad;
    }
    public function __destruct() { } 


public function agregarNovedad() {
    
               // echo"confirm('¿Estas seguro de Desactivar el Colaborador?')";

        $consulta = "insert into t_novedad (id,Fecha_novedad,Titulo_Novedad,Imagen_novedad,Descripcion_novedad,Contenido_Novedad) VALUES('$this->id_novedad','$this->fecha_novedad','$this->titulo_novedad','$this->imagen_novedad','$this->desc_novedad','$this->contenido_novedad')";
        if (mysql_query($consulta)) {
            
            echo"<script language='javascript'> alert('Registro Exitoso ');  </script>";
            echo"<script language='javascript'>location.href=\"../vistas/listaNovedades.php\"   </script>";
        } else {
             echo mysql_error(); 
         //   echo"<script language='javascript'>location.href=\"../vistas/listaNovedades.php\"</script>";
        }
    }
}

