<?php include('header.php'); ?>
<?php include("BarraNavegacionadmin.php"); ?>			
<?php include("../3modelo/autenticacion.php"); ?>
<div  align="center" >
        <font color="white"> <h1>ADMINISTRADOR </h1></font>
            <li></a><?php
        //session_start();
        include("../3modelo/conexion.php");
        $identificacion = $_SESSION['identificacion'];

        $consulta = mysql_query("select * from t_usuario where dni_user='$identificacion'");

        while ($fila = mysql_fetch_array($consulta)) {
            echo "<h2> <font color='white'>Bienvenido:  " . $fila['nom_user'] . " " . $fila['apell_user'] . "</font></h2>";
            echo "<img src='../fotos/" . $fila['foto_user'] . "' width=150px></td>";
        }
        ?>
        <form method="post" action="modificar_foto.php" enctype="multipart/form-data"> 
            <table aling="center">
                <tr>
                    <td class="registr">Modificar Foto</td> 
                    <td class="registr" >
                        <input type="file" name="fotografia" />
                    </td>
                </tr>
                <tr><td><input type="submit" value="Subir archivo" /> </td></tr>
            </table>
        </form>
        </li>
</div>
<?php include("footer.php"); ?>		




