<?php include('./header_1.php'); ?>
<?php include("./BarrNavAsp.php"); ?>			
<?php include("../../3modelo/autenticacion.php"); ?>
<br><br><br>
<div aling="center">
    <div class="container">
        <div class="margin-top">
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
                                    <td><?php echo "<a target='_blank' href=" . $row['url_material'] . ">Ver Link</a>"; ?></td> 
                                    <td><?php echo $row['autor_material']; ?></td>                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>		
            </div>
        </div>
    </div>
</div>
<?php include('../footer.php') ?>
