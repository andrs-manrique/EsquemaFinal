<?php include('./header_1.php'); ?>
<?php include("./BarrNavAsp.php"); ?>			
<?php include("../../3modelo/autenticacion.php"); ?>
<br><br><br>
<div aling="center">
    <div class="container">
        <?php
        include("../../3modelo/conexion.php");
        $identificacion = $_SESSION['identificacion'];
        ?>
        <div align="left">
            <a target="_blank" href="idipa2.php?id=<?php echo$identificacion; ?>">
                <img src='../../img/file_add.png' border='0' alt='Link to this page' width= 25px>Registrar DIPA</a> 
        </div>
        <div class="row">	
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
                        <th>Puntaje</th>   
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
                            <td><?php echo $row['puntaje_dipa']; ?></td> 
                        </tr>
                    <?php } ?>

                </tbody>
            </table>

        </div>		
    </div>
</div>
<?php include('../footer.php') ?>
