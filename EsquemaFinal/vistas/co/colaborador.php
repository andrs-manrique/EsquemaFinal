<?php include('header.php'); ?>
<?php include("BarrNavCol.php");?>			
<?php include("../../3modelo/autenticacion.php");?>
<div  align="center" >
		
<div>
				
				  <ul>
                                  <li>COLABORADOR</li> 
				   <li><?php
				   //session_start();
 include("../../3modelo/conexion.php");
$identificacion = $_SESSION['identificacion'];
                             
		$consulta=mysql_query("select * from t_usuario where dni_user='$identificacion'");
           
             while ($fila = mysql_fetch_array($consulta)) {
            echo "<h3> <font color=''>Bienvenido:  " . $fila['nom_user'] . " " . $fila['apell_user'] . "</font></h3>";
            echo "<img src='../../fotos/" . $fila['foto_user'] . "' width=150px></td>";
        }
				   ?>
				   </li>
                                    <form method="post" action="modificar_foto_1.php" enctype="multipart/form-data"> 
            <table aling="center">
                <tr>
                    <td class="registr">Modificar Foto</td> 
                    <td class="registr" >
                        <input type="file" name="fotografia" required=""/>
                    </td>
                </tr>
                <tr><td><input type="submit" value="Subir archivo"  /> </td></tr>
            </table>
        </form>
				   <li><a href="datosColaborador.php">Datos personales</a></li>
				   <li><a href="cambiarContrasena.php">Cambiar Contraseña</a></li>
				  </ul>
				 
				</div>
</div>
                                		<?php include("../footer.php");?>		

	
				

