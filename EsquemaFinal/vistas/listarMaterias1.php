<?php include('header_1.php'); ?>
<?php include("./BarrNavCol.php"); ?>			
<?php include("../3modelo/autenticacion.php"); ?>
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
                            <strong><i class="icon-user icon-large"></i>&nbsp;MATERIAS DE ESTUDIO ASPIRANTES </strong>
                        </div>
                        <thead>
                            <tr>
                                <th>Identificacion</th>
                                <th>Nombre</th>                                 
                                <th>Objetivo Materia</th>     
                                <th>Descripcion Materia</th>  

                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $user_query2 = mysql_query("select *FROM t_materia ORDER BY id_materia ASC") or die(mysql_error());
                            while ($row = mysql_fetch_array($user_query2)) {
                                $id = $row['id_materia'];
                                ?>


                                <tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['id_materia']; ?></td> 
                                    <td><?php echo $row['nom_materia']; ?></td> 
                                    <td><?php echo $row['objetivo_materia']; ?></td>
                                    <td><?php echo $row['desc_materia']; ?></td>

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