<?php include('header.php'); ?>
<?php include("./BarrNavCol.php"); ?>			
<?php include("../../3modelo/autenticacion.php");?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="../js/jquery.js"></script>
        <link rel=stylesheet href="../css/pc1.css" type="text/css" />
    </head>
    <body>

        <div id="contenedor">

            <section>
                <div id="contieneblog">

                    <aside id="articuloss">

                        <div><br>
                            <h3> <center> Ingresa Material</center></h3><br>
                            <form name="form1" method="post" action="../../2controlador/C_novedad.php">
                                <table align="center">  

                                    <tr><td class="registr"></td>
                                        <td class="registr"><input name="id_novedad" type="hidden" title="Identificacion Novedad" value="0" /></td></tr>
                                    <tr><td class="registr">Fecha Novedad </td>
                                        <td class="registr"><input name="fecha_novedad" type="date" title=" " value="" size="10" maxlength="20" /></td></tr>
                                    <tr><td class="registr">Titulo</td>
                                        <td class="registr"><input name="titulo_novedad" type="text" title=" " value="" size="40" maxlength="20" /></td></tr>                          
                                    <tr><td class="registr">Imagen </td>
                                        <td class="registr"><input name="Img_novedad" type="text" title=" " value="" size="20" maxlength="2048" /></td></tr>
                                    <tr><td class="registr">descr </td>
                                        <td class="registr"><textarea id="element_3" name="desc_novedad" style="width: 400px; height: 50px;"></textarea> 
                                        </td></tr>
                                    <tr><td class="registr">Contenido</td>
                                        <td class="registr"><textarea id="element_3" name="conte_novedad" class="element textarea medium" style="width: 800px; height: 150px;  resize: vertical;"></textarea> 
                                            </div> 

                                    <tr>
                                    <script language="JavaScript">function agregarNovedad() {
                                            document.form1.txtoperacion.value = 'adicionar';
                                        }
                                    </script>

                                    <td class="registr" colspan="2" align="center">
                                        <input type="submit" name="Submit" value="Adicionar Novedad" onClick="agregarNovedad();" > 
                                        <input type='hidden' name='txtoperacion' value='des'></td>


                                    </tr>
                                </table>
                            </form>
                        </div>
                    </aside>
                    <div style="clear:both"></div>
                </div>
            </section>
                            <?php include("../footer.php"); ?>	
