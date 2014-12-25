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
    
}

