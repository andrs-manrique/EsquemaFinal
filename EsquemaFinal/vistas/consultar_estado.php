<?php include('../3modelo/conexion.php'); ?>
<?php
if (isset($_POST['submit'])){
session_start();
$identificacion = $_POST['identificacion'];
$query = "SELECT * FROM t_registro WHERE dni_registro='$identificacion'";
$result = mysql_query($query)or die(mysql_error());
$num_row = mysql_num_rows($result);
$row=mysql_fetch_array($result);
if( $num_row > 0 ) {
header('location:registroCorrecto.php?id='.$identificacion);
$_SESSION['id']=$row['id_registro'];
}
else{ ?>

<?php include('header.php'); ?>
 <?php include('BarraNavegacion.php'); ?>
<div class="alert alert-danger" align="center"> 
 <br> <br> <IMG SRC="../img/error.jpg"  width='100' height='100' /><br>
 <?php echo"<br> <br>El usuario <b> ".$identificacion." NO es Admitido </b>  en la base de datos."
         . " <br> Registrese de nuevo o Contacte al Administrador.";  ?>
    <br><a href="../index.php"><button>Ir a inicio</button> </a>
</div>		
<?php
}}


?>
