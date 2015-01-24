<?php include('header.php'); ?>
<?php include("BarrNavAsp.php"); ?>			
<?php include("../../3modelo/autenticacion.php"); ?>
<div  align="center" >
    
        <font color="black"><h1>Participante</h1>
        </font>
        <?php
        include("../../3modelo/conexion.php");
        $identificacion = $_SESSION['identificacion'];
        $consulta = mysql_query("select * from t_usuario where dni_user='$identificacion'");
        while ($fila = mysql_fetch_array($consulta)) {
            echo "<h1> <font color=''>Bienvenido:  " . $fila['nom_user'] . " " . $fila['apell_user'] . "</font></h1>";
            echo "<img src='../../fotos/" . $fila['foto_user'] . "' width=150px></td>";
        }
        ?>
        <form method="post" action="modificar_foto.php" enctype="multipart/form-data"> 
            <table aling="center">
                <tr>
                    <td class="registr">Modificar Foto</td> 
                    <td class="registr" >
                        <input type="file" name="fotografia" required="" />
                    </td>
                </tr>
                <tr><td><input type="submit" value="Subir archivo" /> </td></tr>
            </table>
        </form>
       
        <li><a href=".php">Datos personales</a></li>
        <li><a href="cambiarContrasena.php">Cambiar Contraseña</a></li>
    

</div><br>
<?php include("../footer.php"); ?>		