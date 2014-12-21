<?php

include ("conexion.php");

class password {

    private $idprueba;
    private $usuario;
    private $encrypted_password;
    private $passwordNueva;
    private $passwordRepeat;

    function __construct($idprueba, $usuario, $encrypted_password, $passwordNueva, $passwordRepeat) {
        $this->idprueba = $idprueba;
        $this->usuario = $usuario;
        $this->encrypted_password = $encrypted_password;
        $this->passwordNueva = $passwordNueva;
        $this->passwordRepeat = $passwordRepeat;
    }

    public function getIdprueba() {
        return $this->idprueba;
    }

    public function getUsuario() {
        return $this->usuario;
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
 
        $consulta = mysql_query("select*from t_usuario where dni_user='$this->idprueba' and clave_user='$this->encrypted_password'"); 
        
       // if ($fila=mysql_fetch_array($consulta)) {
            
        
           $passwordNueva = $this->passwordNueva;
            $passwordRepeat = $this->passwordRepeat;

            if ($passwordNueva == $passwordRepeat) {

                $nuevoPassword = $passwordNueva;

                $identificacion = $this->idprueba;

                mysql_query("UPDATE t_usuario SET clave_user='$nuevoPassword' WHERE dni_user='$this->idprueba' ");

                echo"<script language='javascript'> alert('Tu contraseña a sido cambiada');  </script>";
                echo"<script language='javascript'>location.href=\"../vistas/cambiarContrasena.php\"   </script>";
            } 
            
            
            else {
                
                echo"<script language='javascript'> alert('Las dos contraseñas nuevas no coinciden'); </script>";
                echo"<script language='javascript'>location.href=\"../vistas/cambiarContrasena.php\"   </script>";
            }
        
         /* else {
            echo"<script language='javascript'> alert('La contraseña no es correcta'); </script>";
            echo"<script language='javascript'>location.href=\"../vistas/cambiarContrasena.php\"</script>";
          }*/

    
    }
    
}
    
    ?>
