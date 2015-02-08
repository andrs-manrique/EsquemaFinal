<?php include('./header_1.php'); ?>
<?php include("./BarrNavAsp.php"); ?>			
<?php include("../../3modelo/autenticacion.php"); ?>
<br><br><br>
<div aling="center">
    <div class="container">
        <div class="margin-top">
            <div class="row">	
                     <?php
        include("../../3modelo/conexion.php");
        $identificacion = $_SESSION['identificacion']; 
        ?>
          <div align="center"> <a href="idipa2.php?id=<?php echo$identificacion;?>">Adicionar DIPA</a> </div>
                    <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><i class="icon-user icon-large"></i>&nbsp;DIPA</strong>
                        </div>
                        <thead>
                            <tr>
                         <th>Dipa No. </th>                                 
                                <th>Fecha Ingreso</th>
                                <th>Ver </th>   
                                <th>Observaciones</th>   
                                </tr>
                        </thead>
                        <tbody>
                            <?php
                            $user_query2 = mysql_query("select * FROM t_dipa WHERE id_participante=$identificacion;") or die(mysql_error());
                            while ($row = mysql_fetch_array($user_query2)) {
                                $id = $row['id_dipa'];
                                ?>
                                <tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['id_dipa']; ?></td> 
                                    <td><?php echo$row['fecha_dipa']; ?></td>
                                   <td> <?php echo "<a target='_blank' href='../../dipa/{$row['nombre_dipa']}'>" . $row['nombre_dipa'] . "</a> " ?></td>
                                <td><?php echo $row['obs_dipa']; ?></td> 
                                                              </tr>
                            <?php } ?>

                        </tbody>
                    </table>

                </div>		
            </div>
        </div>
    </div>
<?php include('../footer.php') ?>
