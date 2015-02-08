<?php
require_once("../3modelo/M_Password.php");
$dni_user = $_POST["dni_user"];
$clave_user = $_POST["password"];
$encrypted_password = md5($clave_user);
$passwordNueva = $_POST["passwordNueva"];
$passwordRepeat = $_POST["passwordRepeat"];
//encriptación del atributo password por medio de md5 almacenando en la base de datos el atributo encriptado
$passwordNueva = md5($passwordNueva); //nueva
$passwordRepeat = md5($passwordRepeat); // repeat  
$operacion = $_POST["txtoperacion"];
$objPassword = new password($dni_user, $encrypted_password, $passwordNueva, $passwordRepeat);


switch ($operacion) {
    case "clave_admin":
  
if ($operacion == "clave_admin") {
    echo $encrypted_password . "<br>";  //CLAVE DEL COMPRACION CON EL FORMULARIO
    echo $dni_user . "<br>";
    echo $passwordNueva . "<br>" . $passwordRepeat;   //CLAVE NUEVA Y REPETIDA
    
    if (  $passwordNueva  ==  $passwordRepeat  ){
    include("../3modelo/conexion.php");
    $selId = mysql_query("select *from t_usuario where (dni_user='$dni_user')");
    if ($row = mysql_fetch_array($selId)) {
        $clave = $row["clave_user"];
    }
    echo "<br>" . $clave;// Clave que se encuetra en la BD  
    
    if ($clave == $encrypted_password and $passwordNueva == $passwordRepeat) {
        $nuevoPassword = $passwordNueva;
        $consulta2 = "UPDATE t_usuario SET clave_user='$nuevoPassword' WHERE dni_user='$dni_user'";
        if (mysql_query($consulta2)) {
            echo"<script language='javascript'> alert('La Clave Cambio');  </script>";
            echo"<script language='javascript'>location.href=\"../vistas/participante/aspirante.php\"   </script>";
        } else {
            echo"<script language='javascript'> alert('ERROR CONSULTA BD, No CAMBIO'); </script>";
        }
    } else {
    echo "Error en la clave de Ingreso o las claves no son iguales";
} 
}else {
        echo "<br> <b>Claves diferentes</b>";
}
}
break;
    case "clave_col":
if ($operacion == "cambioContrasena") {
    echo $encrypted_password . "<br>";
    echo $dni_user . "<br>";
    echo $passwordNueva . "<br>" . $passwordRepeat;
    include("../3modelo/conexion.php");
    $selId = mysql_query("select *from t_usuario where (dni_user='$dni_user')");
    if ($row = mysql_fetch_array($selId)) {
        $clave = $row["clave_user"];
    }
    echo "<br>" . $clave;
    if ($clave == $encrypted_password and $passwordNueva == $passwordRepeat) {
        $nuevoPassword = $passwordNueva;
        $consulta2 = "UPDATE t_usuario SET clave_user='$nuevoPassword' WHERE dni_user='$dni_user'";
        if (mysql_query($consulta2)) {
            echo"<script language='javascript'> alert('La Clave Cambio');  </script>";
            echo"<script language='javascript'>location.href=\"../vistas/col/colaborador.php\"   </script>";
        } else {
            echo"<script language='javascript'> alert('ERROR, No CAMBIO'); </script>";
            echo"<script language='javascript'> location.href=\"../vistas\" </script>";
        }
    }
} else {
    echo "error consulta Colaborador";
}

break;
    case "clave_par":
        
               
if ($operacion == "clave_par") {
    echo $encrypted_password . "<br>";  //CLAVE DEL COMPRACION CON EL FORMULARIO
    echo $dni_user . "<br>";
    echo $passwordNueva . "<br>" . $passwordRepeat;   //CLAVE NUEVA Y REPETIDA
    
    if (  $passwordNueva  ==  $passwordRepeat  ){
    include("../3modelo/conexion.php");
    $selId = mysql_query("select *from t_usuario where (dni_user='$dni_user')");
    if ($row = mysql_fetch_array($selId)) {
        $clave = $row["clave_user"];
    }
    echo "<br>" . $clave;// Clave que se encuetra en la BD
    
    
    
    if ($clave == $encrypted_password and $passwordNueva == $passwordRepeat) {
        $nuevoPassword = $passwordNueva;
        $consulta2 = "UPDATE t_usuario SET clave_user='$nuevoPassword' WHERE dni_user='$dni_user'";
        if (mysql_query($consulta2)) {
            echo"<script language='javascript'> alert('La Clave Cambio');  </script>";
            echo"<script language='javascript'>location.href=\"../vistas/participante/aspirante.php\"   </script>";
        } else {
            echo"<script language='javascript'> alert('ERROR CONSULTA BD, No CAMBIO'); </script>";
        }
    } else {
    echo "Error en la clave de Ingreso o las claves no son iguales";
} 
}else {
        echo "<br> <b>Claves diferentes</b>";
}
}
break; 
}
//$objPassword->actualizar();
?>