<?php include('header_1.php'); ?>
<?php include("BarraNavegacionadmin.php");?>			
<?php include("../3modelo/autenticacion.php");?>
<br><br><br>
<div aling="center">
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span13">
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Tabla Aspirantes</strong>
                                </div>
                                <thead>
                                    <tr>
                                        <th>Identificacion</th>
                                        <th>Nombre</th>                                 
                                        <th>Apellido</th>     
                                        <th>Archivo</th>  
                                         <th>Estado </th>     
                                        <th>Calificar1</th>  
                                      
                                         
                                        <th>Observaciones</th>                             
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php
$user_query2=mysql_query("select *FROM t_usuario where rol_user='1'")or die(mysql_error());
									while($row=mysql_fetch_array($user_query2)){
									$id=$row['dni_user']; ?>
									 <tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['dni_user']; ?></td> 
                                    <td><?php echo $row['nom_user']; ?></td> 
                                    <td><?php echo $row['apell_user']; ?></td>
                                    <td> <?php// echo "<a href='../Archivos/{$row['archivo_aspi']}' >Ver Documento</a> " ?></td> 
                                    <td><?php echo $row['rol_user']; ?></td> 
                                    <td><?php echo "<a href='archivo.php?id=$id'><button>Calificar</button> </a>";?></td> 
                                   <td><?php echo "<a href='archivo2.php?id=$id'><button>Calificar2</button> </a>";?></td>

                                        
                           </tr>
 <?php } ?>
                                </tbody>
                            </table>
			</div>		
			</div>
		</div>
    </div>
</div>
<?php include('footer.php') ?>