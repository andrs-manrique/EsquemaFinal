
<?php include('header_1.php'); ?>
<?php include("BarraNavegacionadmin.php"); ?>			
<?php include("../3modelo/autenticacion.php"); ?>
<br><br><br>
<div aling="center">
    <div class="container">
        <div align="left">
            <a target="_blank" href="Novedad.php">
                <img src='../img/file_add.png' border='0' alt='Link to this page' width= 25px>Registrar Novedad</a> 
        </div>
        <div class="row">	
            <div class="span13">
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
                                       <?php echo"<a href='modif_novedad.php?id=$id'> "
                                       . "  <img src='../img/update.png' border='0' alt='Link to this page' width= 25px></a>"; // include('modal_delete_Colabor.php');   
                                       ?>

                                    <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>"  
                                       href="#delete_user<?php echo $id; ?>" data-toggle="modal">
                                        <img src='../img/Delete_Icon.png' border='0' width= 25px> </a>
    <?php include('./Borrar_novedad.php'); ?>
                                   
                                </td>

                            </tr>
<?php } ?>

                    </tbody>
                </table>
            </div>		
        </div>
    </div>
</div>
<?php include('footer.php') ?>
