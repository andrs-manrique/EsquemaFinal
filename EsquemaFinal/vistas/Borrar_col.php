
<?php include('header.php'); ?>
<?php include("BarraNavegacionadmin.php"); ?>			
<?php include("../3modelo/autenticacion.php"); ?>
<div align="center">
 
    
    
    
    
    <script>alert("Quiere eliminar este aspirante")</script>
          
    $consultar="delete from t_usuario where (dni='$this->estudiante' and curso_id='$this->curso' and actividad_tarea='$this->tarea')";
			
    
<?php include("footer.php"); ?>	


