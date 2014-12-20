<?php include('header.php'); ?>
<?php include("BarraNavegacionadmin.php"); ?>			
<?//php include("../3modelo/autenticacion.php");?>


<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="../js/jquery.js"></script>
        <link rel=stylesheet href="../css/pc1.css" type="text/css" />
    </head>
    <body>

        <div id="contenedor">
            <header>
                <div id="titulo">
                    <div id="logo">
                    </div>

                    <h2>Red Aspirantes 2015</h2>
                </div>
                <div style="clear:both;"></div>
            </header>
            <section>
                <div id="contieneblog">

                    <aside id="articuloss">
                        <div>
                            <article  contenteditable="true">
                                <p>Bienvenido ADMINISTRADOR,<br> 
                                    Aqui podrá ingresar
                                   una nueva Materia de Estudio.<p><br>

                                <div class="imagenarticuloblog" id="imgblog3"></div>
                            </article>
                        </div>
                        <div><br>
                            <h3><center>INGRESAR NUEVA MATERIA</center></h3><br>
                            <form name="form1" method="post" action="../2controlador/C_Materia.php">
                                <table align="center">  

                                    <tr><td class="registr">Identificacion de la Materia: </td><td class="registr"><input name="id_materia" type="text" title="Identificacion Materia" value="" size="10" maxlength="20" /></td></tr>
                                    <tr><td class="registr">Materia: </td><td class="registr"><input name="Materia" type="text" title="Materia" value="" size="20" maxlength="2048" /></td></tr>
                                    <tr><td class="registr">Objetivos de la Materia: </td><td class="registr"><textarea id="element_3" name="obj_materia" class="element textarea medium"></textarea> 
                                            </div> </td></tr>
                                    <tr><td class="registr">Descripcion de la Materia: </td><td class="registr"><textarea id="element_3" name="desc_materi" class="element textarea medium"></textarea> 
                                            </div> 
                                    <tr><td class="registr" colspan="2" align="center"><input type="submit" name="Submit" value="Guardar Materia" onClick="insertarMateria()" > 
                                </table>
                            </form>
                        </div>
                    </aside>
                    <div style="clear:both"></div>
                </div>
            </section>
            <div style="clear:both"></div>
            <footer>
           <?php include("footer.php"); ?>	
            </footer>
        </div>
    </body>
</html>
