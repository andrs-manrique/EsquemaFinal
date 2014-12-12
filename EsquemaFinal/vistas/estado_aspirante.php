<?php include('header.php'); ?>
<?php include('BarraNavegacion.php'); ?>
 <div class="container">
		<div class="margin-top">
			<div class="row">	
			<?php include('head.php'); ?>	
<div class="text_content" align="center" >
<h1>Consulta registro </h1>
<form class="form" method="POST" action="consultar_estado.php">
<div class="control-group">
<label class="control-label" for="inputEmail">NO. DE IDENTIFICACIÓN:</label>
<div class="">
<input type='text' class="" name="identificacion"  placeholder="1030567890"  autocomplete="off" maxlength="11" required >
</div>
</div>
<div class="control-group">
<div class="controls">
 <button id="login" name="submit" type="submit" class="btn">
     <i class="icon-signin icon-large"></i>&nbsp;Consultar</button>
	</div>
	</div>
</form>	

 <!-- <IMG SRC="construccion.jpg"  width='600' height='400' /> -->
</div> 

					</div>
					</div>
					</div>





					<?php include('footer.php') ?>