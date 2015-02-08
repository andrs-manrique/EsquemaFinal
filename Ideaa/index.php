<?php include('php/header.php'); ?>
<?php include('php/BarraNavegacion.php'); ?>
<br>
<div class="container" align="center">
    <table border="0">  
        <tr>
            <td>
                <form name="form1" method="post" action="2controlador/C_Usuario.php">

                    <h3 >Iniciar Sesión</h3> 
                    <div> <font color="white">  USUARIO:</div>
                    <div><input type="text" name="dni_user"  tilte="Numero de identificacion" value=""></div>

                    <div> <font color="white">  CONTRASEÑA:</div>
                    <div><input name="clave_user" type="password" title="Escriba su conraseña aqui" ></div>

                    <span>
                        Recordar <a href="olvido.php"> <br>¿Olvido Contraseña?</a>
                        <br>

                    </span>
                    <br>
                    <div align="center">
                        <script language="JavaScript">
                            function verificar() {
                                document.form1.txtoperacion.value = 'verificar';
                            }</script>
                        <input type="submit" name="Submit" value="Entrar" onClick="verificar()" > 
                        <input type='hidden' name='txtoperacion' value='des'>
                    </div>         
                </form>
            </td>
            <td valign="top">
                <div style="padding-left: 40px; padding-right: 30px; padding-bottom: 20px;">
                    <div style="padding: 10px; background-color: #EEEEEE; border: solid 1px black">
                        <span id="lblMensaje" style="font-family:Tahoma;font-size:12pt;"><p align="center" class="MsoNormal" style="text-align: center;">
                                <span style="color: #000099; font-weight: bold; text-decoration: underline;">Educación Alternativa</span></p>
                            <p align="center" class="MsoNormal" style="text-align: center;">
                                <span style="color: #000099; font-weight: bold; text-decoration: underline;"><br>
                                </span></p>
                            <p style="margin: 0px; text-align: center;"><br>
                            </p></span>
                    </div>
                </div>
                <table style="width: 100%">
                    <tbody>
                        <tr>
                            <td style="width: 60px; padding: 10px" align="center">
                                <img id="Image1" src="./img/Ok-icon.png" style="height:40px;width:40px;">
                            </td>
                            <td>
                                <span id="lblCaracteristicaUno" style="font-family:Tahoma;font-size:10pt;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt um ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.Sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    <b>Duis aute irure dolor in reprehenderit in voluptate velit esse</b>
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse.</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 10px" align="center">
                                <img id="Image2" src="./img/icon-256x256.png" style="height:40px;width:40px;">
                            </td> 
                            <td>
                                <a id="HyperLink2" href="./VISTAS/estado_aspirante.php" target="_blank" style="color:Black;font-family:Tahoma;font-size:10pt;text-decoration:underline;">CONSULTAR ESTADO</a>
                                <span id="lblCaracteristicaDos" style="font-family:Tahoma;font-size:10pt;"> - uis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non <b>LOREM </b> lorem.</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 10px" align="center">
                                <img id="Image3" src="./img/user.png" style="height:40px;width:40px;">
                            </td>
                            <td>
                                <span id="lblCaracteristicaTres" style="font-family:Tahoma;font-size:10pt;">Los sueños no se sueñan <b>se construyen</b> y se luchan al calor de la esperanza.</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 60px; padding: 10px" align="center">
                                <img id="Image1" src="./img/Ok-icon.png" style="height:40px;width:40px;">
                            </td>
                            <td>
                                <span id="lblCaracteristicaUno" style="font-family:Tahoma;font-size:10pt;"> Lorem Lorem lorem lorem lorem lorem.</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </table>
</div>

<?php include('php/footer.php') ?>