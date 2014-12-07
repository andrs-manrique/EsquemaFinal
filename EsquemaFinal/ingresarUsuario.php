<?php include('php/header.php'); ?>
 <?php include('php/BarraNavegacion.php'); ?>
<div class="container" align="center">

<form name="form1" method="post" action="2controlador/C_Usuario.php">
    <font color="white">   <h3 >INGRESAR</h3> </font>
                  <div> <font color="white">  USUARIO:</div>
	          <div><input type="text" name="dni_user"  tilte="Numero de identificacion" value=""></div>
                  
                  <div> <font color="white">  CONTRASEÑA:</div>
		  <div><input name="clave_user" type="password" title="Escriba su conraseña aqui" value=""></div>
                 <span>
                     <input type="checkbox" name="1" value="1"> 
                     Recordar <a href="#"> <br>¿Olvido Contraseña?</a>
                 </span><div></div>
                  <br>
<div align="center">
           <script language="JavaScript">function verificar(){document.form1.txtoperacion.value = 'verificar';}</script>
           <input type="submit" name="Submit" value="Entrar" onClick="verificar()" > 
           <input type='hidden' name='txtoperacion' value='des'>
</div>         
 </form>



</div>

<?php include('php/footer.php') ?>