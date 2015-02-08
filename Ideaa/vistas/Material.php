<?php include('./header_1.php'); ?>
<?php include("./BarraNavegacionadmin.php"); ?>			
<?php include("../3modelo/autenticacion.php"); ?>
<br><br><br>
<div aling="center">
    <div class="container">
       
            <div align="left">
                <a target="_blank" href="material_1.php">
                    <img src='../img/file_add.png' border='0' alt='Link to this page' width= 25px>Registrar Material</a> 
            </div>

            <div class="row">	

                <div class="span13">
                    <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><i class="icon-user icon-large"></i>&nbsp;MATERIAL</strong>
                        </div>
                        <thead>
                            <tr>
                                <th>Fecha Novedad</th>
                                <th>Titulo</th>                                 
                                <th>Contenido</th>   
                                <th>Materia</th>   
                                <th>TipoMaterial</th> 
                                <th>url</th>   
                                <th>Autor</th>   
                                <th>Acciones</th>   



                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $user_query2 = mysql_query("select * FROM t_material ") or die(mysql_error());
                            while ($row = mysql_fetch_array($user_query2)) {
                                $id = $row['id_material'];
                                ?>
                                <tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['fecha_material']; ?></td> 
                                    <td><?php echo$row['Titulo_material']; ?></td>
                                    <td><?php echo $row['Contenido']; ?></td> 
                                    <td><?php echo $row['area_material']; ?></td> 
                                    <td><?php echo $row['tipo_material']; ?></td> 
                                    <td><?php echo "<a target='_blank' href=" . $row['url_material'] . "> Link</a>"; ?></td> 
                                    <td><?php echo $row['autor_material']; ?></td> 
                                    <td><?php echo"<a href='infoMaterial.php?id=$id'> <img src='../img/update.png' border='0' alt='Link to this page' width= 25px></a>"; ?>                                                                     

                                        
 <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>"  
                                           href="#delete_user<?php echo $id; ?>" data-toggle="modal">
                                       <img src='../img/Delete_Icon.png' border='0' width= 25px> </a>
  <?php include('borrarMat.php'); ?>

                                    </td>

                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>		
            </div>
        </div>
    </div>
<?php include('./footer.php') ?>
