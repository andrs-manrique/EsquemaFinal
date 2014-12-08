<?php

	require_once("../3modelo/M_Password.php");

	$idprueba=$_POST["id_prueba"];
	$usuario = $_POST["usuario"];
	$password = $_POST["password"];
	$passwordNueva = $_POST["passwordNueva"];
	$passwordRepeat = $_POST["passwordRepeat"];

	//encriptación del atributo password por medio de md5 almacenando en la base de datos el atributo encriptado
	$encrypted_password=md5($password);
	$passwordNueva=md5($passwordNueva);
	$passwordRepeat=md5($passwordRepeat);

	$operacion = $_POST["txtoperacion"];
        
        
        $objPassword= new password($idprueba, $usuario, $encrypted_password, $passwordNueva, $passwordRepeat);
        
        
		$objPassword->actualizar();
                
                
                echo 'aqui estamos';
	


?>