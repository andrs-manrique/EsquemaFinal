<?php
require_once("../3modelo/M_Colaborador.php");

$identificacion=$_POST["usuario"];
$pass=$_POST["login"];
$email=$_POST["correo"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$celular=$_POST["cel"];
$materia=$_POST["materia_asig"];
$carrera=$_POST["carrera"];
$semestre=$_POST["semestre"];
$sexo=$_POST["sexo"];
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
