<?php include('header.php'); ?>
<?php include("BarraNavegacionadmin.php");?>			
<?php include("../3modelo/autenticacion.php");?>
		<div  align="center" >
				
				  <ul>
                                      <font color="white">  <a>ADMIN</font>
				   <li></a><?php
  $conexion = mysqli_connect("localhost","root","","db_ideaa");
                                 
				   //session_start();
 include("../3modelo/conexion.php");
$identificacion = $_SESSION['identificacion'];
                             
		$consulta=mysql_query("select * from t_usuario where dni_user='$identificacion'");
                
						while($fila=mysql_fetch_array($consulta))
						{echo "<h1> <font color='white'>Bienvenido:  ".$fila['nom_user']." ".$fila['apell_user']."</font></h1>";
						 echo "<img src='../fotos/".$fila['foto_user']."' width=150px></td>";
}      
				   ?>
				   </a></li>
				   <li><a href="datosAdministrador.php">Datos personales</a></li>
				   <li><a href="cambiarContrasena.php">Cambiar Contraseña</a></li>
				  </ul>
				 
				</div><br>
                                		<?php include("footer.php");?>		

	
				

