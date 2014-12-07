<?php
require_once("../3modelo/M_Colaborador.php");

$identificacion=$_POST["dni"];
$pass=$_POST["clave_user"];
$email=$_POST["mail_user"];
$nombre=$_POST["nom_user"];
$apellido=$_POST["apell_user"];
$celular=$_POST["tel_user"];
$materia=$_POST["id_materia_user"];
$carrera=$_POST["carrera_user"];
$semestre=$_POST["universidad_user"];
$sexo=$_POST["sex_user"];
$operacion=$_POST["txtoperacion"];

$colaborador=new colaborador($identificacion, $pass, $email, $nombre, $apellido, $celular, $materia, $carrera, $semestre, $sexo);
$colaborador->insertar()
       // $objUsuario->insertar();

        
        /////////////////////////////////////////////////
      /* if($operacion =="modificarColaborador")
{
	$colaborador->modificarColaborador();
}

*/
?>
