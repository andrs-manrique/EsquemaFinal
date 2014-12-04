<?php include('header.php'); ?>
<?php include('head.php'); ?>
<?php /*include('BarraNavegacionCol.php'); */?>

<div id="contenedor">
        <?php include("../3modelo/M_Colaborador.php");?>
        <h3>INGRESAR NUEVO COLABORADORES HPTA!!!!!!</h3><br>
        <form name="form1" method="post" action="../2controlador/C_Colaborador.php">
            <table align="center">
                <tr><td class="registr">Digité su identificación:</td><td class="registr"><input type="text"name="usuario" title="usuario" value=""required></td></tr>
                <tr><td class="registr">Digité la contraseña:</td><td class="registr"><input name="login" type="password" title="login" value=""required></td></tr>
                <tr><td class="registr">Digité el correo:</td><td class="registr"><input type="text" name="correo" title="correo" value=""required></td></tr>
                <tr><td class="registr">Digité su nombre:</td><td class="registr"><input type="text" name="nombre" title="nombre" value=""required></td></tr>
                <tr><td class="registr">Digité su apellido:</td><td class="registr"><input type="text" name="apellido" title="apellido" value=""required></td></tr>
                <tr><td class="registr">Digité su celular:</td><td class="registr"><input type="text" name="cel" title="celular" value=""required></td></tr>


                <tr><td class="registr">Materia Asignada:</td><td class="registr"><select name="materia_asig" id="sexo"required>
                            <option value="Matematicas">Matematicas</option>
                            <option value="Filosofia">Filosofia</option>
                            <option value="Analisis de Imagen">Analisis de Imagen</option> 
                        </select></td></tr>

                <tr><td class="registr">Carrera que cursa:</td><td class="registr"><input type="text"name="carrera" title="usuario" value=""></td></tr>

                </select></td></tr>
                <tr><td class="registr">Semestre que cursa:</td><td class="registr"><select name="semestre" id="semestre">
                            <option value="">Seleccione el semestre</option>
                            <option value="primero">Primer semestre</option>
                            <option value="segundo">Segundo semestre</option>
                            <option value="tercero">Tercer semestre</option>
                            <option value="cuarto">Cuarto semestre</option>
                            <option value="quinto">Quinto semestre</option>
                            <option value="sexto">Sexto semestre</option> 

                        </select></td></tr>
                <tr><td class="registr">Seleccione sexo:</td><td class="registr"><select name="sexo" id="sexo">
                            <option value="">Seleccione su sexo</option>
                            <option value="masculino">Masculino</option>
                            <option value="femenino">Femenino</option> 
                        </select></td></tr>
                
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