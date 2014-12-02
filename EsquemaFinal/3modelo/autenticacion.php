<?php
//Inicio la sesión
session_start();

//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO
if ($_SESSION["autenticado"] != "SI") {
    //si no existe, envio a la página de autentificacion
    header("Location: ../index.php");
    //ademas salgo de este script
    exit();
}
?> 