
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
