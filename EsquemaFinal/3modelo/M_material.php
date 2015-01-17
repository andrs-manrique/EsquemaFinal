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
    private $taller;
            
    function __construct($id_material, $fechamaterial, $titulomaterial, $contenido, $area, $tipomaterial, $url, $autor,$taller) {
        $this->id_material = $id_material;
        $this->fechamaterial = $fechamaterial;
        $this->titulomaterial = $titulomaterial;
        $this->contenido = $contenido;
        $this->area = $area;
        $this->tipomaterial = $tipomaterial;
        $this->url = $url;
        $this->autor = $autor;
        $this->taller=$taller;
    }
    
        public function __destruct() { } 
    


public function agregarMaterial() {
    
$consulta ="INSERT INTO t_material(id_material,fecha_material, Titulo_material, Contenido,area_material,tipo_material, url_material, autor_material,material) values ('$this->id_material','$this->fechamaterial','$this->titulomaterial','$this->contenido','$this->area','$this->tipomaterial','$this->url','$this->autor','$this->taller')";
        if (mysql_query($consulta)) {
            
            echo"<script language='javascript'> alert('El registro es un EXITO ');  </script>";
            echo"<script language='javascript'>location.href=\"../vistas/co/listaMaterial.php\"   </script>";
        } else {
             echo mysql_error(); 
         //   echo"<script language='javascript'>location.href=\"../vistas/listaNovedades.php\"</script>";
        }
    }
    
      
    public function actualizarMaterial() { //                                                                                                                                                                                                                                      usuario_nombre='$this->nombre',usuario_apellido='$this->apellido',usuario_correo='$this->email',
        $consulta = "update t_material set id_material='$this->id_material',Titulo_material='$this->titulomaterial',Contenido='$this->contenido',area_material='$this->area',tipo_material='$this->tipomaterial',url_material='$this->url',autor_material='$this->autor' where(id_material='$this->id_material')";
       if (mysql_query($consulta)) {
            echo"<script language='javascript'> alert('La Actualizacion Material es un EXITO');  </script>";
              
                echo"<script language='javascript'>location.href=\"../vistas/Material.php\"   </script>";
       }else{
            echo"<script language='javascript'> alert('ERROR, No se Actualizo'); </script>";
            echo"<script language='javascript'> location.href=\"../vistas/editarUsuario.php\" </script>";
        }
    }
}

