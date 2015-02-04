<?php

require_once("../3modelo/M_Materia.php");



$materia_id=$_POST['id_materia'];
$materia_nom=$_POST['Materia'];
$materia_obj=$_POST['obj_materia'];
$materia_des=$_POST['desc_materia']; 
$operacion=$_POST["txtoperacion"];

$objMateria=new Materia($materia_id, $materia_nom, $materia_obj, $materia_des);


switch ($operacion) {
    case "ingresar":
    $objMateria->insertarMateria();
        
 

    case "modificar":
        $objMateria->modificar();
           break;
}


?>
