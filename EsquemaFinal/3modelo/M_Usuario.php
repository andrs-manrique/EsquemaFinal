<?php
include("conexion.php");

	class usuario{
            
            
            
            private $dni;
private $tipodocumento;
private $nom_user;
private $apell_user;
private $clave_user;
private $sex_user;
private $mail_user;
private $tel_user;
private $civil_user;
private $lugarnac_user;
private $nac_user;
private $localidad_user;
private $estrato_user;
private $barrio_user;
private $archivo_usuario ;                                              
private $responsable_user;
private $cel_respon_user;
private $foto_user;
private $fecha_registro_user;
private $carrera_user;
private $universidad_user;
private $id_colegio;
private $id_estado;
private $id_jornada;
private $rol_user;
private $id_materia_user;
            
            
function __construct($dni, $tipodocumento, $nom_user, $apell_user, $clave_user, $sex_user, $mail_user, $tel_user, $civil_user, $lugarnac_user, $nac_user, $localidad_user, $estrato_user, $barrio_user, $archivo_usuario, $responsable_user, $cel_respon_user, $foto_user, $fecha_registro_user, $carrera_user, $universidad_user, $id_colegio, $id_estado, $id_jornada, $rol_user, $id_materia_user) {
    $this->dni = $dni;
    $this->tipodocumento = $tipodocumento;
    $this->nom_user = $nom_user;
    $this->apell_user = $apell_user;
    $this->clave_user = $clave_user;
    $this->sex_user = $sex_user;
    $this->mail_user = $mail_user;
    $this->tel_user = $tel_user;
    $this->civil_user = $civil_user;
    $this->lugarnac_user = $lugarnac_user;
    $this->nac_user = $nac_user;
    $this->localidad_user = $localidad_user;
    $this->estrato_user = $estrato_user;
    $this->barrio_user = $barrio_user;
    $this->archivo_usuario = $archivo_usuario;
    $this->responsable_user = $responsable_user;
    $this->cel_respon_user = $cel_respon_user;
    $this->foto_user = $foto_user;
    $this->fecha_registro_user = $fecha_registro_user;
    $this->carrera_user = $carrera_user;
    $this->universidad_user = $universidad_user;
    $this->id_colegio = $id_colegio;
    $this->id_estado = $id_estado;
    $this->id_jornada = $id_jornada;
    $this->rol_user = $rol_user;
    $this->id_materia_user = $id_materia_user;
}



            
       
                public function __destruct(){}	
function getDni() {
    return $this->dni;
}

function getTipodocumento() {
    return $this->tipodocumento;
}

function getNom_user() {
    return $this->nom_user;
}

function getApell_user() {
    return $this->apell_user;
}

function getClave_user() {
    return $this->clave_user;
}

function getSex_user() {
    return $this->sex_user;
}

function getMail_user() {
    return $this->mail_user;
}

function getTel_user() {
    return $this->tel_user;
}

function getCivil_user() {
    return $this->civil_user;
}

function getLugarnac_user() {
    return $this->lugarnac_user;
}

function getNac_user() {
    return $this->nac_user;
}

function getLocalidad_user() {
    return $this->localidad_user;
}

function getEstrato_user() {
    return $this->estrato_user;
}

function getBarrio_user() {
    return $this->barrio_user;
}

function getArchivo_usuario() {
    return $this->archivo_usuario;
}

function getResponsable_user() {
    return $this->responsable_user;
}

function getCel_respon_user() {
    return $this->cel_respon_user;
}

function getFoto_user() {
    return $this->foto_user;
}

function getFecha_registro_user() {
    return $this->fecha_registro_user;
}

function getCarrera_user() {
    return $this->carrera_user;
}

function getUniversidad_user() {
    return $this->universidad_user;
}

function getId_colegio() {
    return $this->id_colegio;
}

function getId_estado() {
    return $this->id_estado;
}

function getId_jornada() {
    return $this->id_jornada;
}

function getRol_user() {
    return $this->rol_user;
}

function getId_materia_user() {
    return $this->id_materia_user;
}

public function verificar()
		{	
session_start();		
$consulta= mysql_query("select*from t_usuario where dni_user='$this->dni' and clave_user='$this->clave_user' and id_estado=1");
		
				if($fila=mysql_fetch_array($consulta))
				{
					$_SESSION['autenticado']= "SI";
					$_SESSION['identificacion']=$fila['dni_user'];

					if($fila['rol_user']=='2')
					{
			 			header("location: ../vistas/colaborador.php");
					}
					else if($fila['rol_user']=='3')
					{
						header("location: ../vistas/aspirante.php");
					}
                                        else if($fila['rol_user']=='1')
					{
			 			
                                               echo"<script language='javascript'> alert('ADMINISTRADOR');  </script>";
                                               header("location: ../vistas/administrador.php");
					}
					                                        
                                        else
					{
						header("location: ../index.php");
                                                echo"<script language='javascript'> alert('Error de Inicio');  </script>";
					}
				}
									
				else
				{ 
					header("location: ../index.php");}
		}

///////////////////////////////////////////
                
                public function consultarDatos()
		{		
		$peticion=mysql_query("select * from t_usuarios where nom_user='$this->nom_user'");
			
			while($fila=mysql_fetch_array($peticion))
			{  $this->dni = $fila['dni_user'];
			   
			}
		
		 $consulta=mysql_query("select *from t_usuario where (dni_user='$this->dni')");		
				
			if($row=mysql_fetch_array($consulta))
			{
				//echo "encontro";
				echo"<script language='javascript'> alert('La consulta es un EXITO');  </script>";
				echo"<script language='javascript'> location.href=\"../vistas/editarDatos.php?cedula=".$row['usuario_identificador']."\"</script>";
			}
		}

                
                //---------------------Funcion No 2-----------------
                
                public function modificar()
		{		
$consulta="update t_usuario set nom_user='$this->nom_user',apell_user='$this->apell_user',"
        . "mail_user='$this->mail_user',tipodni_user='$this->tipodocumento',"
        . "mail_user='$this->mail_user',tipodni_user='$this->tipodocumento',"
        . "mail_user='$this->mail_user',tipodni_user='$this->tipodocumento',"
        . "mail_user='$this->mail_user',tipodni_user='$this->tipodocumento',"
        . "mail_user='$this->mail_user',tipodni_user='$this->tipodocumento',"
        . "mail_user='$this->mail_user',tipodni_user='$this->tipodocumento',"
        . "mail_user='$this->mail_user',tipodni_user='$this->tipodocumento',"
        . "mail_user='$this->mail_user',tipodni_user='$this->tipodocumento',"
        . "mail_user='$this->mail_user',tipodni_user='$this->tipodocumento',"
        . "mail_user='$this->mail_user',tipodni_user='$this->tipodocumento',"
        . "mail_user='$this->mail_user',tipodni_user='$this->tipodocumento',"
        . "mail_user='$this->mail_user',tipodni_user='$this->tipodocumento',"


        . "where(dni_user='$this->dni')";
		
			if(mysql_query($consulta))
			{ 
				echo"<script language='javascript'> alert('La Actualizacion es un EXITO');  </script>";
				echo"<script language='javascript'>location.href=\"../vistas/administrador.php\"   </script>";		
			} 
			else
			{ 
				echo"<script language='javascript'> alert('ERROR, No se Actualizo'); </script>";
				echo"<script language='javascript'> location.href=\"../vistas/editarUsuario.php\" </script>";			
			}  
		}
	
}
?>