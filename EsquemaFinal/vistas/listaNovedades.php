
<?php include('header_1.php'); ?>
<?php include("BarraNavegacionadmin.php"); ?>			
<?php include("../3modelo/autenticacion.php"); ?>
<br><br><br>
<div aling="center">
    <div class="container">
        <div class="margin-top">
            <div class="row">	
                <div class="span13">
                    
                    <div align="center"> <a href="ingresar_Novedad.php">Adicionar Novedad</a> </div>
                    
                    <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><i class="icon-user icon-large"></i>&nbsp;Novedades</strong>
                        </div>
                        <thead>
                            <tr>
                                <th>Fecha Novedad</th>
                                <th>Titulo</th>                                 
                                <th>Desc</th>     
                                <th>Url</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $user_query2 = mysql_query("select * FROM t_novedad  ORDER BY Fecha_Novedad ASC") or die(mysql_error());
                            while ($row = mysql_fetch_array($user_query2)) {
                                $id = $row['id'];
                                ?>
                                <tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['Fecha_novedad']; ?></td> 
                                    <td><?php echo $row['Titulo_Novedad']; ?></td> 
                                    <td><?php echo $row['Descripcion_novedad']; ?></td>
                                    <td><?php echo"<a href='ContenidoNov.php?id=$id'>Ver</a>"; ?></td>
                                    <td> 
                                    <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>"  
                                            href="#delete_user<?php echo $id; ?>" data-toggle="modal"></a>
                                            <?php echo"<a href='modif_novedad.php?id=$id'>   <img src='../img/update.png' border='0' alt='Link to this page' width= 25px></a>"; // include('modal_delete_Colabor.php');   ?>
                                    <a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" 
                                           href="#edit<?php echo $id; ?>" data-toggle="modal"></a>
                                           <?php echo"<a href='borrar_novedad.php?id=$id'>   <img src='../img/Delete_Icon.png' border='0' alt='Link to this page' width= 28px></a>"; //include('modal_edit_Colabor.php');   ?>

                                    </td>



                                    <?php //include('toolttip_edit_delete.php');   ?>
                                    <!-- Modal edit user -->

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
