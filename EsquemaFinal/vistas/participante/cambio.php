<?php 

        global $web; 
        global $feed; 
        global $portadas; 
        global $genero_id; 
        global $genero_titulo; 
        global $ficha_titulo; 
        global $ficha_id; 
         
    $salida='<div id="interior" class="interior">';     
    $salida='<div id="buzon" class="buzon">';     
    $salida='<h2>Cambiar Clave de Acceso</h2>';     

$salida='<form action="'.$web.'cambiar-clave/" method="POST"> 
  <table width="100%" cellpadding="0" cellspacing="5"> 
  <tr> 
    <td width="31%" align="right"><strong>Nick:</strong></td> 
    <td width="69%"><input name="nick" type="nick" class="file" size="15"></td> 
  </tr> 
  <tr> 
    <td width="31%" align="right"><strong>Clave actual:</strong></td> 
    <td width="69%"><input name="pass" type="password" class="file" size="30"></td> 
  </tr> 
  <tr> 
    <td align="right"><strong>Nueva clave:</strong></td> 
    <td><input name="nueva" type="password" class="file" size="30"></td> 
  </tr> 
  <tr> 
    <td align="right"><strong>Confirmar nueva clave:</strong></td> 
    <td><input name="nueva2" type="password" class="file"size="30"></td> 
  </tr> 
</table> 
<table width="100%" border="0" cellspacing="5" cellpadding="0"> 
  <tr> 
    <td>&nbsp;</td> 
  </tr> 
  <tr> 
    <td><div align="center"> 
      <input type="submit" class="boton" value="Modificar clave" name="modificar" /> 
      &nbsp;&nbsp;&nbsp; 
      <input type="reset" class="boton" value="Borrar campos" /> 
    </div></td> 
  </tr> 
  <tr> 
    <td>&nbsp;</td> 
  </tr> 
  <tr> 
    <td><span class="Estilo1">* Todos los campos son obligatorios</span></td> 
  </tr> 
  <tr></tr> 
  <tr> 
    <td>&nbsp;</td> 
  </tr> 
  <tr> 
    <td><a href="">Volver</a></td> 
  </tr> 
</table> 
</form> '; 