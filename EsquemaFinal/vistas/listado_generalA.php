<?php
ob_start();
        include("../3modelo/conexion.php");
$sql = mysql_query("SELECT * from t_usuario where rol_user='2'") or die(mysql_error()); 
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
        <span class="Estilo66 Estilo71" style="text-align: right">FECHA: <?php echo date("d-m-Y")?></span></h1></td>
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
          <th width="12%"><span class="Estilo58">Sexo</span></th>
           <th width="12%"><span class="Estilo58">Contacto</span></th>

          <th width="41%"><span class="Estilo58">Correo</span></th>
        </tr>
		 <?php 
  while($array = mysql_fetch_array($sql)) {
  ?>
        <tr class="even_row">
            
          <td style="text-align: center"><span class="Estilo3"><?php echo $array['rol_user']; ?></span></td>
          <td style="text-align: center"><span class="Estilo3"><?php echo $array['dni_user']; ?></span></td>
          <td><div align="center"><span class="Estilo3"><span class="Estilo3"><?php echo $array['nom_user']; ?>&nbsp;-&nbsp;<?php echo $array['apell_user']; ?></span></td>
          <td style="text-align: center"><span class="Estilo3"><?php echo $array['sex_user']; ?></span></td>
                    <td style="text-align: center"><span class="Estilo3"><?php echo $array['tel_user']; ?></span></td>

          <td style="text-align: center"><div align="center"><span class="Estilo3"><?php echo $array['mail_user']; ?></span></div></td>
        </tr>
      </tbody>
	  <?php } ?>
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
    $dompdf->stream("sample.pdf", array('Attachment'=>'0'));
	  
?>
