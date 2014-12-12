<?php include('../3modelo/conexion.php'); ?>
<?php
if (isset($_POST['submit'])){
session_start();
$identificacion = $_POST['identificacion'];
$query = "SELECT * FROM aspirante WHERE id_aspi='$identificacion'";
$result = mysql_query($query)or die(mysql_error());
$num_row = mysql_num_rows($result);
$row=mysql_fetch_array($result);
if( $num_row > 0 ) {
header('location:registroCorrecto.php');
$_SESSION['id']=$row['id_aspi'];
}
else{ ?>

<div class="alert alert-danger" align="center"> 
    <br> <br> <IMG SRC="error.jpg"  width='100' height='100' /><br>
 <?php echo"<br> <br>El usuario <b> ".$identificacion." NO  </b> se encuentra registrado en la base de datos."
         . " <br> Registrese de nuevo o Contacte al Administrador.";  ?>
    <br><a href="index.php"><button>Ir a inicio</button> </a>
</div>		
<?php
}}


?>
