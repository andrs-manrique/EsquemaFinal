<?php include('header.php'); ?>
<?php include("./BarraNavegacionadmin.php"); ?>			
<?php include("../3modelo/autenticacion.php"); ?>
        <section>
            <div id="contieneblog">
                <aside id="articuloss">
                    <?php $identificacion = $_SESSION['identificacion']; ?>
                    <div>
                        <h3> <center> Ingresa Novedad</center></h3>
                        <form name="form1" method="post" action="../2controlador/C_novedad.php" enctype="multipart/form-data">
                            <table align="center" border="0">  
                                  <tr><td class="registr"></td>
                                    <td class="registr"><input name="id_novedad" type="hidden" title="Identificacion Novedad" value="0" /></td></tr>
                                <tr><td class="registr">Titulo</td>
                                 <td class="registr"><input name="titulo_novedad" type="text" title="Tilte" value="" /></td>

                                </tr>
                                <tr>
                                <td class="registr">IMAGEN:</td>
                                <td>
                                <input type="file" name="Img_novedad"/>
                                    </td>
                                    </tr>
                                    <tr> 
                                    <td class="registr">Descripción</td>
                                    <td class="registr"><textarea id="element_3" name="desc_novedad" class="element textarea medium" style="width: 800px; height: 150px;  resize: vertical;" required></textarea> 
                                    </td>
                                </tr>
                                <tr> 
                                    <td class="registr">Contenido</td>
                                    <td class="registr"><textarea id="element_3" name="conte_novedad" class="element textarea medium" style="width: 800px; height: 150px;  resize: vertical;" required></textarea> 
                                    </td>
                                </tr>
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
            </div>
        </section>
        <?php include("./footer.php"); ?>	
