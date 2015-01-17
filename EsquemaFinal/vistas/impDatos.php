<?php
ob_start();
include("../3modelo/conexion.php");
$idaspi = base64_decode($_GET['id']);
$sql = mysql_query("select *from t_usuario where (dni_user='$idaspi')") or die(mysql_error());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="STYLESHEET" href="../dompdf/www/test/css/print_static.css" type="text/css" />
    <style type="text/css">
        <!--
        .Estilo66 {font-size: 9pt;
                   font-weight: bold;
        }
        .Estilo70 {font-size: 9pt}
        .Estilo71 {font-family: Verdana, Arial, Helvetica, sans-serif}
        .Estilo72 {font-size: 9pt; font-weight: bold; font-family: Verdana, Arial, Helvetica, sans-serif; }
        -->
    </style>

</head>
<table align="center">
    <tr>
        <td><img src="../img/banner.png" height="150" width="692" /></td>
    </tr>
    <tr>
        <td>&nbsp;ASPIRANTES</td>
    </tr>
    <tr>
        <td>&nbsp;RED INVESTIGATIVA DE EDUCACION ALTERNATIVA Y AUTONOMA</td>
    </tr>
    <tr></tr>
</table>
<div id="footer">
    <div class="page-number"></div>
</div>
<div class="page" style="font-size: 7pt">
    <table style="width: 100%;" class="header">
        <tr>
            <td><h1 class="Estilo70" style="text-align: right">
                    <span class="Estilo66 Estilo71" style="text-align: right">FECHA: <?php echo date("d-m-Y") ?></span></h1></td>
        </tr>
    </table>
    <table style="width: 100%; font-size: 8pt;">
    </table>
    <table class="change_order_items">
        <tr>
            <td colspan="5"><div align="center"><span class="Estilo53"><strong>LISTADO  GENERAL DE USUARIOS</strong></span></div></td>
        </tr>
        <tbody>
            <tr>
                <th width="7%">Nº</th>
                <th width="13%"><span class="Estilo58">Documento</span></th>
                <th width="27%"><span class="Estilo58">Nombre</span></th>
                <th width="12%"><span class="Estilo58">Contacto</span></th>
                <th width="41%"><span class="Estilo58">Correo</span></th>
            </tr>
            <?php
            while ($row = mysql_fetch_array($sql)) {
                $dni = $row["dni_user"];
                $tipodni_user = $row["tipodni_user"];
                $nom_user = $row["nom_user"];
                $apell_user = $row["apell_user"];
                $clave_user = $row["clave_user"];
                $sex_user = $row["sex_user"];
                $mail_user = $row["mail_user"];
                $tel_user = $row["tel_user"];
                $civil_user = $row["civil_user"];
                $lugarnac_user = $row["lugarnac_user"];
                $nac_user = $row["nac_user"];
                $localidad_user = $row["localidad_user"];
                $estrato_user = $row["estrato_user"];
                $barrio_user = $row["barrio_user"];
                $archivo_usuario = $row["archivo_usuario"];
                $responsable_user = $row["responsable_user"];
                $cel_respon_user = $row["cel_respon_user"];
                $foto_user = $row["foto_user"];
                $fecha_registro_user = $row["fecha_registro_user"];
                $carrera_user = $row["carrera_user"];
                $universidad_user = $row["universidad_user"];
                $id_colegio = $row["id_colegio"];
                $id_estado = $row["id_estado"];
                $id_jornada = $row["id_jornada"];
                $rol_user = $row["rol_user"];
                $id_materia_user = $row["id_materia_user"];
                ?>
                <tr class="even_row">

                    <td style="text-align: center"><span class="Estilo3"><?php echo $rol_user; ?></span></td>
                    <td style="text-align: center"><span class="Estilo3"><?php echo $dni ?></span></td>
                    <td><div align="center"><span class="Estilo3"><span class="Estilo3"><?php echo $nom_user; ?>&nbsp;-&nbsp;<?php echo $apell_user; ?></span></td>
                                <td style="text-align: center"><span class="Estilo3"><?php echo $tel_user; ?></span></td>

                                <td style="text-align: center"><div align="center"><span class="Estilo3"><?php echo $mail_user; ?></span></div></td>
                                </tr>
                                </tbody>
                            <?php } ?>
                            </table>

                            <font color="white"><h3>DATOS PERSONALES ASPIRANTE</h3></font>
                            <center><?php
                                $consulta = mysql_query("select * from t_usuario where dni_user='$idaspi'");
                                while ($fila = mysql_fetch_array($consulta)) {
                                    echo "<h1> <font color='white'>" . $fila['nom_user'] . " " . $fila['apell_user'] . "</font></h1>";
                                    echo "<img src='../fotos/" . $fila['foto_user'] . "' width=150px>";
                                }
                                ?></center></br>
                            <table align="center" >  
                                <tr><td  colspan="4" align="center"><hr></td></tr>

                                <tr class="even_row">
                                    <td style="text-align: center"><span class="Estilo3">No. Identificación: <?php echo $dni; ?> 
                                        </span>
                                    </td>

                                    <td style="text-align: center"><span class="Estilo3">Tipo de  Identificación: <?php echo $tipodni_user; ?> 
                                        </span>
                                    </td>
                                </tr>
                                <tr class="even_row">
                                    <td style="text-align: center"><span class="Estilo3">Nombre(s): <?php echo $nom_user; ?> 
                                        </span>
                                    </td>

                                    <td style="text-align: center"><span class="Estilo3">Apellido(s): <?php echo $apell_user; ?> 
                                        </span>
                                    </td>
                                </tr>
                                <tr class="even_row">
                                    <td style="text-align: center"><span class="Estilo3">Sexo: <?php echo $sex_user; ?> 
                                        </span>
                                    </td>

                                    <td style="text-align: center"><span class="Estilo3">Correo: <?php echo $mail_user; ?> 
                                        </span>
                                    </td>
                                </tr>
                                <tr class="even_row">
                                    <td style="text-align: center"><span class="Estilo3">Fecha Registro: <?php echo $fecha_registro_user; ?> 
                                        </span>
                                    </td>

                                    <td style="text-align: center"><span class="Estilo3">Contacto: <?php echo $tel_user; ?> 
                                        </span>
                                    </td>
                                </tr>

                                <tr class="even_row">
                                    <td style="text-align: center"><span class="Estilo3">Fecha Nacimiento: <?php echo $nac_user; ?> 
                                        </span>
                                    </td>

                                    <td style="text-align: center"><span class="Estilo3">Lugar Nacimiento: <?php echo $lugarnac_user; ?> 
                                        </span>
                                    </td>
                                </tr>


                                <tr><td  colspan="4" align="center"><hr></td></tr>

                                <tr class="even_row">
                                    <td style="text-align: center"><span class="Estilo3">Localidad: <?php echo $localidad_user; ?> 
                                        </span>
                                    </td>
                                </tr>
                                <tr class="even_row">

                                    <td style="text-align: center"><span class="Estilo3">Barrio: <?php echo $barrio_user; ?> 
                                        </span>
                                    </td>
                                </tr>
                                <tr class="even_row">
                                    <td style="text-align: center"><span class="Estilo3">Estrato:
                                        </span>
                                    </td>
                                   
                                     <td style="text-align: center"><span class="Estilo3"> <?php echo $estrato_user; ?> 
                                        </span>
                                    </td>
                                </tr>
                                <tr><td  colspan="4" align="center"><hr></td></tr>


                                <tr class="even_row">
                                    <td style="text-align: center"><span class="Estilo3">Nombre Responsable: <?php echo $responsable_user; ?> 
                                        </span>
                                    </td>

                                    <td style="text-align: center"><span class="Estilo3">Numero Contacto: <?php echo $cel_respon_user; ?> 
                                        </span>
                                    </td>
                                </tr>
                                <tr><td  colspan="4" align="center"><hr></td></tr>
<tr class="even_row">
                                    <td style="text-align: center"><span class="Estilo3">Tipo Colegio:
                                     </span></td>
                                    <td style="text-align: center">
                                        <?php
                                        include("../3modelo/conexion.php");
                                       $consulta = mysql_query("select * from t_colegio where id_colegio=$id_colegio;");
                                                           while ($row = mysql_fetch_array($consulta)) {
                                                               echo $row['tipo_colegio'];
                                                           }
                                        ?> </td>
                                </tr>
                               <tr class="even_row">
                                    <td style="text-align: center"><span class="Estilo3">Jornada:
                                     </span></td>
                                    <td style="text-align: center">
                                        <?php
                                        include("../3modelo/conexion.php");
                                        $consulta = mysql_query("select * from t_jornada where id_jornada=$id_jornada;");
                                    while ($row = mysql_fetch_array($consulta)) {
                                        echo $row['tipo_jornada'];
                                    }
                                        ?> </td>
                                </tr>
                                <tr class="even_row">
                                    <td style="text-align: center"><span class="Estilo3">Estado Aspirante:
                                     </span></td>
                                    <td style="text-align: center">
                                        <?php
                                        include("../3modelo/conexion.php");
                                        $consulta = mysql_query("select * from t_estado_user where id_estado=$id_estado;");
                                        while ($row = mysql_fetch_array($consulta)) {
                                            echo $row['nom_estado'];
                                        }
                                        ?> </td>
                                </tr>
                            </table>

                    </div>
                    <table style="width: 100%; font-size: 8pt;">
                    </table>
                    <p align="center" class="Estilo51 Estilo59">&nbsp;</p>
                    <p class="Estilo50">
                        <?php
                        $salida_html = ob_get_contents();
                        ob_end_clean();


                        require_once("../dompdf/dompdf_config.inc.php");
                        $dompdf = new DOMPDF();
                        //$dompdf->set_paper('Legal');
                        $dompdf->load_html($salida_html);
                        $dompdf->render();
                        $dompdf->stream("sample.pdf", array('Attachment' => '0'));
                        ?>
