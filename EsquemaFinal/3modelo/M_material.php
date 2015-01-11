<?php
include ("conexion.php");
class mat{
    
    private $id_material;
    private $fechamaterial;
    private $titulomaterial;
    private $contenido;
    private $area;
    private $tipomaterial;
    private $url;
    private $autor;
    
    function __construct($id_material, $fechamaterial, $titulomaterial, $contenido, $area, $tipomaterial, $url, $autor) {
        $this->id_material = $id_material;
        $this->fechamaterial = $fechamaterial;
        $this->titulomaterial = $titulomaterial;
        $this->contenido = $contenido;
        $this->area = $area;
        $this->tipomaterial = $tipomaterial;
        $this->url = $url;
        $this->autor = $autor;
    }
    
        public function __destruct() { } 
    


public function agregarMaterial() {
    
$consulta ="INSERT INTO t_material(id_material,fecha_material, Titulo_material, Contenido,area_material,tipo_material, url_material, autor_material) values ('$this->id_material','$this->fechamaterial','$this->titulomaterial','$this->contenido','$this->area','$this->tipomaterial','$this->url','$this->autor')";
        if (mysql_query($consulta)) {
            
            echo"<script language='javascript'> alert('El registro es un EXITO ');  </script>";
            echo"<script language='javascript'>location.href=\"../vistas/co/listaMaterial.php\"   </script>";
        } else {
             echo mysql_error(); 
         //   echo"<script language='javascript'>location.href=\"../vistas/listaNovedades.php\"</script>";
        }
    }
}

