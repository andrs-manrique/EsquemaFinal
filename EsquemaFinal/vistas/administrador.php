<?php include('header.php'); ?>
<?php include("BarraNavegacionadmin.php");?>			
<?php include("../3modelo/autenticacion.php");?>
		<div>
				
				  <ul>
                                      <font color="white">  <li><a>ADMIN</li> </font>
				   <li><a><?php
				   //session_start();
 include("../3modelo/conexion.php");
$identificacion = $_SESSION['identificacion'];
                             
		$consulta=mysql_query("select * from t_usuario where dni_user='$identificacion'");
                
						while($fila=mysql_fetch_array($consulta))
						{
                                                   
							echo "<h1> <font color='white'>Bienvenido:  ".$fila['nom_user']." ".$fila['apell_user']."</font></h1>";
						}
				   ?>
				   </a></li>
				   <li><a href="datosAdministrador.php">Datos personales</a></li>
				   <li><a href="cambiarContrasena.php">Cambiar Contraseña</a></li>
				  </ul>
				 
				</div><br>
                                		<?php include("footer.php");?>		

	
				

