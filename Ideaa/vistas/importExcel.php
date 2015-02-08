<?php include('header_1.php'); ?>
<?php include("BarraNavegacionadmin.php"); ?>			
<?php include("../3modelo/autenticacion.php"); ?>
<!-- http://ProgramarEnPHP.wordpress.com -->
<body>
    <div  align="center" >
        <h3><font color="white"> Adjuntar Lista de Aspirantes Seleccionados</font></h3>
        <br>
        <!-- FORMULARIO PARA SOICITAR LA CARGA DEL EXCEL -->
        <form name="importa" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">

            <input type="file"name="excel" required=""/>

            <input type="submit" name="enviar"  value="Importar" />

            <input type="hidden" value="upload" name="action" />

        </form>
        <?php
//<!– CARGA LA MISMA PAGINA MANDANDO LA VARIABLE upload –>
        if (isset($_POST['enviar'])) {
//extract($_POST);
//if ($action == "upload") //si action tiene como valor UPLOAD haga algo (el value de este hidden es es UPLOAD iniciado desde el value
//{
//cargamos el archivo al servidor con el mismo nombre(solo le agregue el sufijo bak_)
            $archivo = $_FILES['excel']['name']; //captura el nombre del archivo
            $tipo = $_FILES['excel']['type']; //captura el tipo de archivo (2003 o 2007)
            $destino = "bak_" . $archivo; //lugar donde se copiara el archivo
            if (copy($_FILES['excel']['tmp_name'], $destino)) {
//si dese copiar la variable excel (archivo).nombreTemporal a destino (bak_.archivo) (si se ha dejado copiar)
                echo "<br><br><br> <font color='white'> Archivo Cargado Con Exito </font>";
            } else {
                echo "<br>Error Al Cargar el Archivo";
            }
////////////////////////////////////////////////////////
            if (file_exists("bak_" . $archivo)) { //validacion para saber si el archivo ya existe previamente
                /* INVOCACION DE CLASES Y CONEXION A BASE DE DATOS */
                /** Invocacion de Clases necesarias */
                require_once('Classes/PHPExcel.php');
                require_once('Classes/PHPExcel/Reader/Excel2007.php');
//DATOS DE CONEXION A LA BASE DE DATOS
                $cn = mysql_connect("localhost", "root", "") or die("ERROR EN LA CONEXION");
                $db = mysql_select_db("db_ideaa", $cn) or die("ERROR AL CONECTAR A LA BD");

// Cargando la hoja de calculo
                $objReader = new PHPExcel_Reader_Excel2007(); //instancio un objeto como PHPExcelReader(objeto de captura de datos de excel)
                $objPHPExcel = $objReader->load("bak_" . $archivo); //carga en objphpExcel por medio de objReader,el nombre del archivo
                $objFecha = new PHPExcel_Shared_Date();

// Asignar hoja de excel activa
                $objPHPExcel->setActiveSheetIndex(0); //objPHPExcel tomara la posicion de hoja (en esta caso 0 o 1) con el setActiveSheetIndex(numeroHoja)
// Llenamos un arreglo con los datos del archivo xlsx
                $i = 1; //celda inicial en la cual empezara a realizar el barrido de la grilla de excel
                $param = 0;
                $contador = 0;
                while ($param == 0) { //mientras el parametro siga en 0 (iniciado antes) que quiere decir que no ha encontrado un NULL entonces siga metiendo datos

                    $dni_registro = $objPHPExcel->getActiveSheet()->getCell('B' . $i)->getCalculatedValue();
                    $nom_registro = $objPHPExcel->getActiveSheet()->getCell('C' . $i)->getCalculatedValue();
                    $sexo_registro = $objPHPExcel->getActiveSheet()->getCell('D' . $i)->getCalculatedValue();
                    $mail_registro = $objPHPExcel->getActiveSheet()->getCell('E' . $i)->getCalculatedValue();
//$sexo=$objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
//INSERT INTO `t_registro`(`id_registro`, `dni_registro`, `nom_registro`, `sexo_registro`, `mail_registro`)
                    $c = ("insert into t_registro values($i,$dni_registro,'$nom_registro','$sexo_registro','$mail_registro')");
                    mysql_query($c);

                    if ($objPHPExcel->getActiveSheet()->getCell('A' . $i)->getCalculatedValue() == NULL) {
//pregunto que si ha encontrado un valor null en una columna inicie un parametro en 1 
//que indicaria el fin del ciclo while
                        $param = 1; //para detener el ciclo cuando haya encontrado un valor NULL
                    }
                    $i++;
                    $contador = $contador + 1;
                }
                $totalIngresados = $contador - 1; //(porque se se para con un NULL y le esta registrando como que tambien un dato)
                echo " <font color='white'> Total elementos subidos:      $totalIngresados </font> ";
            } else {//si no se ha cargado el bak
                echo "<font color='white'> Necesitas primero importar el archivo </font>";
            }
            unlink($destino); //desenlazar a destino el lugar donde salen los datos(archivo)
        }
        ?>
         <form name="form" method="post" action="./deletedb.php" >   
<table aling="center">    
       <script language="JavaScript">
                       function delet(){if (confirm('¿Estas seguro de Borrar la Lista?')){ document.form.txtoperacion.value = 'delet';} 
                           else {} } </script>  
						    <td class="registr" colspan="2" align="center">
                                                        <input type="submit" name="delet" value="Borrar Lista" onClick="delet()" >
                                                        <input type='hidden' name='txtoperacion' value='delet'></td>
						    </tr>
						</table>        
					</form>
    </div>
   


<center>
    <div aling="center">
        <div class="container">
           
                <div class="row">	
                    <table cellpadding="0" cellspacing="0" border="2" class="table  table-bordered" id="example">
                        <div class="alert alert-info">
                            <strong><i class="icon-user icon-large"></i>&nbsp;Registros</strong>
                        </div>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Documento</th>                                 
                                <th>Nombre</th>     
                                <th>Correo</th>                            
                            </tr>
                        </thead>
                        <tbody>

<?php
include("../3modelo/conexion.php");
$user_query2 = mysql_query("select *FROM t_registro") or die(mysql_error());
while ($row = mysql_fetch_array($user_query2)) {
    $id = $row['dni_registro'];
    ?>
                                <tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['id_registro']; ?></td> 
                                    <td><?php echo $row['dni_registro']; ?></td> 
                                    <td><?php echo $row['nom_registro']; ?></td>
                                    <td><?php echo $row['mail_registro']; ?></td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>		
            </div>
        </div>
</center>
                            <?php include("footer.php"); ?>		
