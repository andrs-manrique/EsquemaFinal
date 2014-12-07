<?php
include("conexion.php");

	class usuario{
            
            
public $dni;
private $tipodocumento;
private $foto_user;
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

private $fecha_registro_user;
private $carrera_user;
private $universidad_user;
private $id_colegio;
private $id_estado;
private $id_jornada;
private $id_materia_user;
private $rol_user;

            
function __construct($dni, $tipodocumento, $foto_user, $nom_user, $apell_user, $clave_user, $sex_user, $mail_user, $tel_user, $civil_user, $lugarnac_user, $nac_user, $localidad_user, $estrato_user, $barrio_user, $archivo_usuario, $responsable_user, $cel_respon_user, $fecha_registro_user, $carrera_user, $universidad_user, $id_colegio, $id_estado, $id_jornada, $id_materia_user, $rol_user) {
    $this->dni = $dni;
    $this->tipodocumento = $tipodocumento;
    $this->foto_user = $foto_user;
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
    $this->fecha_registro_user = $fecha_registro_user;
    $this->carrera_user = $carrera_user;
    $this->universidad_user = $universidad_user;
    $this->id_colegio = $id_colegio;
    $this->id_estado = $id_estado;
    $this->id_jornada = $id_jornada;
    $this->id_materia_user = $id_materia_user;
    $this->rol_user = $rol_user;
}



    public function __destruct(){}	
    
    
public function getDni() {
    return $this->dni;
}

public function getTipodocumento() {
    return $this->tipodocumento;
}

public function getFoto_user() {
    return $this->foto_user;
}

public function getNom_user() {
    return $this->nom_user;
}

public function getApell_user() {
    return $this->apell_user;
}

public function getClave_user() {
    return $this->clave_user;
}

public function getSex_user() {
    return $this->sex_user;
}

public function getMail_user() {
    return $this->mail_user;
}

public function getTel_user() {
    return $this->tel_user;
}

public function getCivil_user() {
    return $this->civil_user;
}

public function getLugarnac_user() {
    return $this->lugarnac_user;
}

public function getNac_user() {
    return $this->nac_user;
}

public function getLocalidad_user() {
    return $this->localidad_user;
}

public function getEstrato_user() {
    return $this->estrato_user;
}

public function getBarrio_user() {
    return $this->barrio_user;
}

public function getArchivo_usuario() {
    return $this->archivo_usuario;
}

public function getResponsable_user() {
    return $this->responsable_user;
}

public function getCel_respon_user() {
    return $this->cel_respon_user;
}

public function getFecha_registro_user() {
    return $this->fecha_registro_user;
}

public function getCarrera_user() {
    return $this->carrera_user;
}

public function getUniversidad_user() {
    return $this->universidad_user;
}

public function getId_colegio() {
    return $this->id_colegio;
}

public function getId_estado() {
    return $this->id_estado;
}

public function getId_jornada() {
    return $this->id_jornada;
}

public function getId_materia_user() {
    return $this->id_materia_user;
}

public function getRol_user() {
    return $this->rol_user;
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
						header("location: ../vistas/estudiante.php");
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
		$peticion=mysql_query("select * from t_usuario where nom_user='$this->nom_user'");
			
			while($fila=mysql_fetch_array($peticion))
			{  $this->dni=$fila['dni_user'];}
		
		 $consulta=mysql_query("select * from t_usuario where (dni_user='$this->dni')");		
				
			if($row=mysql_fetch_array($consulta))
			{
				
	echo"<script language='javascript'> alert('La consulta es un EXITO');  </script>";
	echo"<script language='javascript'> location.href=\"../vistas/editarDatos.php?dni=".$row['dni_user']."\"</script>";
                        }else {
                            echo"<script language='javascript'> alert('ERROR CONSULTAR DATOS');  </script>";
                        }
		}

                
                //---------------------Funcion No 2-----------------
                
                public function modificar()
		{ //                                                                                                                                                                                                                                      usuario_nombre='$this->nombre',usuario_apellido='$this->apellido',usuario_correo='$this->email',
                               // dni_user`=[value-1],`tipodni_user`=[value-2],`           nom_user                   apell_user    `              clave_user`=[value-5],`        sex_user`=[value-6],`       mail_user`=[value-7],`    tel_user`=[value-8],`         civil_user`=[value-9],`lugarnac_user`=[value-10],`nac_user`=[value-11],`localidad_user`=[value-12],`estrato_user`=[value-13],`barrio_user`=[value-14],`archivo_usuario`=[value-15],`                                         responsable_user`=[value-16],`cel_respon_user`=[value-17],`                                                  foto_user`=[value-18],`fecha_registro_user`=[value-19],`carrera_user`=[value-20],`universidad_user`=[value-21],`                                                         id_colegio`=[value-22],`id_estado`=[value-23],`id_jornada`=[value-24],`rol_user`=[value-25],`id_materia_user`=[value-26] WHERE 1                    
                        $consulta="update t_usuario set dni_user='$this->dni',tipodni_user='$this->tipodocumento',nom_user='$this->nom_user',apell_user='$this->apell_user',clave_user='$this->clave_user',sex_user='$this->sex_user',mail_user='$this->mail_user',tel_user='$this->tel_user',civil_user='$this->civil_user',lugarnac_user='$this->lugarnac_user',nac_user='$this->nac_user',localidad_user='$this->localidad_user',estrato_user='$this->estrato_user',barrio_user='$this->barrio_user',archivo_usuario='$this->archivo_usuario',responsable_user='$this->responsable_user',cel_respon_user='$this->cel_respon_user',foto_user='$this->foto_user',fecha_registro_user='$this->fecha_registro_user',carrera_user='$this->carrera_user',universidad_user='$this->universidad_user',id_colegio='$this->id_colegio',id_estado='$this->id_estado',id_jornada='$this->id_jornada',rol_user='$this->rol_user',id_materia_user='$this->id_materia_user' where(dni_user='$this->dni')";
		
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
	
                
                
                
                
                //INSERTAR
                ///////////////////////////////////////////
	
public function insertarDatos()
		{
    
 $consulta=" INSERT into t_usuario(dni_user,tipodni_user,nom_user,apell_user,clave_user,sex_user,mail_user,tel_user,civil_user,lugarnac_user,nac_user,localidad_user,estrato_user,barrio_user,archivo_usuario,responsable_user,cel_respon_user,foto_user,fecha_registro_user,carrera_user,universidad_user,id_colegio,id_estado,id_jornada,rol_user,id_materia_user) values ('$this->dni','$this->tipodocumento','$this->foto_user','$this->nom_user','$this->apell_user','$this->clave_user','$this->sex_user','$this->mail_user','$this->tel_user','$this->civil_user','$this->lugarnac_user','$this->nac_user','$this->localidad_user','$this->estrato_user','$this->barrio_user','$this->archivo_usuario','$this->responsable_user','$this->cel_respon_user','$this->fecha_registro_user','$this->carrera_user','$this->universidad_user','$this->id_colegio','$this->id_estado','$this->id_jornada','$this->id_materia_user''$this->rol_user')";  
			if(mysql_query($consulta))
			{ 
				echo"<script language='javascript'> alert('El registro es un EXITO');  </script>";
				//echo"<script language='javascript'>location.href=\"../vistas/administrador.php\"   </script>";		
			} 
			else{
				echo"<script language='javascript'>location.href=\"../vistas/ingresarAspirante.php\"</script>";			
			}  
	    }
}
?>