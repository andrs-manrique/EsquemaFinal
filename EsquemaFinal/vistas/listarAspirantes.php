<?php include('header_1.php'); ?>
<?php include("./BarrNavCol.php");?>			
<?php include("../3modelo/autenticacion.php");?>
<br><br><br>
<center>
<div aling="center">
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span13">
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Aspirantes</strong>
                                </div>
                                <thead>
                                    <tr>
                                        <th>Identificacion</th>
                                        <th>Nombre</th>                                 
                                        <th>Apellido</th>     
                                        <th>Sexo</th>  
                                         <th>Telefono </th>     
                                        <th>Estado</th>  
                                        <th>Documento</th>
                                       <th>Consultar</th> 
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php
$user_query2=mysql_query("select *FROM t_usuario where rol_user='3' ORDER BY dni_user ASC")or die(mysql_error());
				 while($row=mysql_fetch_array($user_query2)){
				 $id=$row['dni_user']; ?>
				 <tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['dni_user']; ?></td> 
                                    <td><?php echo $row['nom_user']; ?></td> 
                                    <td><?php echo $row['apell_user']; ?></td>
                                    <td><?php echo $row['sex_user']; ?></td><td>
                                        <?php echo $row['tel_user']; ?></td>
                                    <td><?php echo $row['id_estado']; ?></td>
                                       <td><?php echo $row['id_estado']; ?></td>

                                     <td><?php echo"<a href='verDatosAspirante.php?id=$id'>Ver Más</a>"; ?></td>
                        </tr>
<?php } ?>

                                </tbody>
                            </table>
			</div>		
			</div>
		</div>
    </div>
</div>
</center>
<?php include('footer.php') ?>