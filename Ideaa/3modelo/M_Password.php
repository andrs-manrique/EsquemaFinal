<?php

include ("conexion.php");

class password {
    private $dni_user;
    private $encrypted_password;
    private $passwordNueva;
    private $passwordRepeat;

    function __construct( $dni_user, $encrypted_password, $passwordNueva, $passwordRepeat) {
        $this->dni_user = $dni_user;
        $this->encrypted_password = $encrypted_password;
        $this->passwordNueva = $passwordNueva;
        $this->passwordRepeat = $passwordRepeat;
    }

    function getDni_user() {
        return $this->dni_user;
    }

    
    public function getEncrypted_password() {
        return $this->encrypted_password;
    }

    public function getPasswordNueva() {
        return $this->passwordNueva;
    }

    public function getPasswordRepeat() {
        return $this->passwordRepeat;
    }

    public function actualizar() {
      
        
        //busca en la BD el dni and la clave de ese dni 
        $consulta = mysql_query("select * from t_usuario where (dni_user='$this->dni_user' and clave_user='$this->encrypted_password')");
        if (mysql_query($consulta)) {
        echo "ntro a consulta 1";
        $passwordNueva = $this->passwordNueva;
        $passwordRepeat = $this->passwordRepeat;

        if ($passwordNueva == $passwordRepeat) {
            $nuevoPassword = $passwordNueva;
            $identificacion = $this->dni_user;
            $consulta2 = "UPDATE t_usuario SET clave_user='$nuevoPassword' WHERE dni_user='$this->dni_user'";

            if (mysql_query($consulta2)) {
                echo"<script language='javascript'> alert('La CLave Cambio');  </script>";
                echo"<script language='javascript'>location.href=\"../vistas/administrador.php\"   </script>";
            } else {
                echo"<script language='javascript'> alert('ERROR, No CAMBIO'); </script>";
                echo"<script language='javascript'> location.href=\"../vistas\" </script>";
            }
        }

    } else { echo "error consulta1";}

}
}
?>
