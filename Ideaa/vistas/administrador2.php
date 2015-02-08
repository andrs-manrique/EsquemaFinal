<?php include('header.php'); ?>
<?php include("BarraNavegacionadmin.php"); ?>			
<?php include("../3modelo/autenticacion.php"); ?>
<div id="page-wrap">
<br>
<div class="container" align="center">
  
        <font color="black"> <h1>ADMINISTRADOR </h1></font>
         <?php
        //session_start();
        include("../3modelo/conexion.php");
        $identificacion = $_SESSION['identificacion'];
        $consulta = mysql_query("select * from t_usuario where dni_user='$identificacion'");
        while ($fila = mysql_fetch_array($consulta)) {
            echo "<h2> <font color='black'>Bienvenido:  <br> <table>"
            . "<tr><td><b>" . $fila['nom_user'] . " " . $fila['apell_user'] . "</b></td></font></h2>";
            echo "<td><img src='../fotos/" . $fila['foto_user'] . "' width=150px></td></tr></table>";
        }
        ?>
        <form method="post" action="modificar_foto.php" enctype="multipart/form-data"> 
            <table aling="center">
                <tr>
                    <td class="registr"><h4>Actualizar: </h4></td> 
                    <td class="registr" >
                        <input type="file" name="fotografia"  required=""/>
                    </td>
                <td><input type="submit" value="Modificar" /> </td>
                </tr>
            </table>
        </form>
</div>
</div>
<?php include('../php/footer.php') ?>