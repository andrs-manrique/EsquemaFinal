<?php
require_once("../3modelo/M_Usuario.php");
 //--------------------------------------
$fechahoy=getdate();
$FechaActual= $fechahoy["mday"] ."-".$fechahoy["mon"]."-".$fechahoy["year"];
$fecha_registro_user=$fechahoy["year"]."-".$fechahoy["mon"]."-".$fechahoy["mday"];

echo $FechaActual;


$dni=$_POST["dni_user"];
$tipodni_user=$_POST["tipodni_user"];
$nom_user=$_POST["nom_user"];
$apell_user=$_POST["apell_user"];
$clave_user=$_POST["clave_user"];
$clave_user = md5($clave_user); 
$sex_user=$_POST["sex_user"];
$mail_user=$_POST["mail_user"];
$tel_user=$_POST["tel_user"];
$civil_user=$_POST["civil_user"];
$lugarnac_user=$_POST["lugarnac_user"];
$nac_user=$_POST["nac_user"];
$localidad_user=$_POST["localidad_user"];
$estrato_user=$_POST["estrato_user"];
$barrio_user=$_POST["barrio_user"];
$archivo_usuario=$_POST["archivo_usuario"];  
$responsable_user=$_POST["responsable_user"];
$cel_respon_user=$_POST["cel_respon_user"];
$foto_user=$_POST["foto_user"]; //Linea 22
//$fecha_registro_user=$_POST["fecha_registro_user"];
$carrera_user=$_POST["carrera_user"];
$universidad_user=$_POST["universidad_user"];
$id_colegio=$_POST["id_colegio"];
$id_estado=$_POST["id_estado"];
$id_jornada=$_POST["id_jornada"];
$rol_user=$_POST["rol_user"];
$id_materia_user=$_POST["id_materia_user"];

$operacion=$_POST["txtoperacion"];
//-------------



$objUsuario = new usuario(
        $dni,$tipodni_user,$nom_user,$apell_user,$clave_user,
        $sex_user,$mail_user,$tel_user,$civil_user,$lugarnac_user,
        $nac_user,$localidad_user,$estrato_user,$barrio_user,$archivo_usuario,
        $responsable_user,$cel_respon_user,$foto_user,$fecha_registro_user,$carrera_user,
        $universidad_user,$id_colegio,$id_estado,$id_jornada,$rol_user,$id_materia_user);
    
            echo"<script language='javascript'> alert('..:: Entra al Switch::..');  </script>";

 //$objUsuario->insertarDatos();
switch ($operacion) {

    case "verificar":
       $objUsuario->verificar();
        break;
    case "consultarDatos":
       	$objUsuario->consultarDatos();
        break;
    
     case "consultarDatosCol":
      echo"<script language='javascript'> alert('..Entro:..');  </script>";
       	$objUsuario->consultarDatosCol();
        break; 
    
    case "consultarDatosPar":
      echo"<script language='javascript'> alert('..Entro:..');  </script>";
       	$objUsuario->consultarDatosPar();
        break; 

    case "actualizar":
       	$objUsuario->modificar();
        break;
    case "actualizarPar":
       	$objUsuario->modificarPar();
        break;
    
    
    
    
    
    case "actualizarCol":
       	$objUsuario->actualizarCol();
        break;
    
    case "modificarParADMIN":
       	$objUsuario->modificarParADMIN();
        break;
       
   
     case "Activar":
       	$objUsuario->Activar();
        break;
    
    
    case "desac":
       	$objUsuario->desactivar();
        break;
    
    case "insertarDatos":
      echo"<script language='javascript'> alert('..Registrando Informacion.');  </script>";
        	$objUsuario->insertarDatos();
        break;
    
    case "insertarDatoscol":
      echo"<script language='javascript'> alert('..Registrando Informacion.');  </script>";
        	$objUsuario->insertarDatosCol();
        break;


}




/*if($operacion=="insertarDatos"){

}*/

/*
if($operacion=="consultarDatos")
{
	$objUsuario->consultarDatos();
}
if($operacion=="consultarDatosCol")
{
	$objUsuario->consultarDatosCol();
}
if($operacion=="actualizar")
{
	$objUsuario->modificar();
}
/*
	if(($_POST["dni"])=="") 
	{ echo " <script language='JavaScript'> alert('El campo Identificación Es Oblicatorio Diligenciar'); 
 *        location.href=\"../vistas/ingresarUsuario.php\"; </script>"; exit();}
	
	if(!is_numeric($_POST["tipodni_user"]))
	{ echo " <script language='JavaScript'> alert('Ingrese un valor numerico en el campo Identificación'); location.href=\"../vistas/ingresarUsuario.php\"; </script>"; exit();}
	if(($_POST["nom_user"])=="") 
	{ echo " <script language='JavaScript'> alert('El campo Contraseña Es Oblicatorio Diligenciar'); location.href=\"../vistas/ingresarUsuario.php\"; </script>"; exit();}
	
	if(($_POST["apell_user"])=="") 
	{ echo " <script language='JavaScript'> alert('El campo Nombre Es Oblicatorio Diligenciar'); location.href=\"../vistas/ingresarUsuario.php\"; </script>"; exit();}
	
	if(is_numeric($_POST["nom_user"]))
	{ echo " <script language='JavaScript'> alert('Ingrese un valor no numerico en el campo Nombre'); location.href=\"../vistas/ingresarUsuario.php\"; </script>"; exit();}
	if(($_POST["mail_user"])=="") 
	{ echo " <script language='JavaScript'> alert('El campo Apellido Es Oblicatorio Diligenciar'); location.href=\"../vistas/ingresarUsuario.php\"; </script>"; exit();}
	
	if(is_numeric($_POST["localidad_user"]))
	{ echo " <script language='JavaScript'> alert('Ingrese un valor no numerico en el campo Apellido'); location.href=\"../vistas/ingresarUsuario.php\"; </script>"; exit();}
*/
	

?>