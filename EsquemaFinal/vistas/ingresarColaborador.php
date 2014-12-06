<?php include('header.php'); ?>
<?php include('head.php'); ?>
<?php /* include('BarraNavegacionCol.php'); */ ?>

<div id="contenedor">
    <?php include("../3modelo/M_Usuario.php"); ?>
    <h3>INGRESAR NUEVO COLABORADORES HPTA!!!!!!</h3><br>
    <form name="form1" method="post" action="../2controlador/C_Usuario.php">
        <table align="center">


            <tr><td class="registr">Digité su  Numero de identificación:</td><td class="registr"><input type="text"name="dni" title="usuario" value=""required></td></tr>
            <tr><td class="registr">Ingrese  su Tipo de identificación:</td><td class="registr"><input type="text"name="tipodni_user" title="usuario" value=""required></td></tr>
            <tr><td class="registr">Digité su nombre:</td><td class="registr"><input type="text" name="nom_user" title="nombre" value=""required></td></tr>
            <tr><td class="registr">Digité su apellido:</td><td class="registr"><input type="text" name="apell_user" title="apellido" value=""required></td></tr>
            <tr><td class="registr">Digité la contraseña:</td><td class="registr"><input name="clave_user" type="password" title="login" value=""required></td></tr>
            <tr><td class="registr">Digité el correo:</td><td class="registr"><input type="text" name="mail_user" title="correo" value=""required></td></tr>

            <tr><td class="registr">Digité su celular:</td><td class="registr"><input type="text" name="tel_user" title="celular" value=""required></td></tr>

            <tr><td class="registr">Carrera que cursa:</td><td class="registr"><input type="text"name="carrera_user" title="usuario" value=""></td></tr>

            <td colspan="2" align="center" class="registr">
                <input type="submit" name="Submit" value="INGRESAR COLABORADOR" onClick="ingresar()"> 
                <input type='hidden' name='txtoperacion' value='des'></td>
            <!--<td colspan="2" align="center" class="registr"><input type="submit" name="Submit" value="INGRESAR COLABORADOR" </td>-->
        </table>
    </form>
    <div style="clear:both"></div>
    <div style="clear:both"></div>
</div>
<?php include('footer.php'); ?>