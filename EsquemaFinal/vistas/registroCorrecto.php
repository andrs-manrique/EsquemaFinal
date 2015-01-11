<?php include('header.php'); ?>
<?php include('BarraNavegacion.php'); ?>
<div class="container">
    <div class="margin-top">
        <div class="row">		
            <br><br>
            <div class="text_content">
                <div class="controls" align="center">
                    <!-- Contenido Texto --><br>
                    <label class="control-label"> 
                        <font color="white">         <h2> Usuario Admitido Por favor Registrarse en el siguiente Link: </h2> </font></label>
                     <?php $variable = $_GET["id"]; ?>
                    <div class="text_content">
                        <div class="controls" align="center"> 
                            <?php //echo 'Numero: ' . $variable; ?>
                            <br>
                  <h2>  <a target='_blank' href='<?php echo "Formulario.php?identificador=". base64_encode($variable);?>'> Link Formulario de Registro</a> </h2>

                            <IMG SRC="../img/bien.jpg"  width='100' height='100' /><br>
                        </div>
                    </div>
                    <!-- end content -->


                </div>

            </div>
        </div>


    </div>
    <?php include('footer.php') ?>