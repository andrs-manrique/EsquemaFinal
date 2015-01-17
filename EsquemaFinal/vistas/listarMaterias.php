<?php include('header_1.php'); ?>
<?php include("BarraNavegacionadmin.php"); ?>			
<?php include("../3modelo/autenticacion.php"); ?>
<div aling="center">
    <div class="container">
        <div class="margin-top">
            <div class="row">	
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
                                    <td width="100">

                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>"  
                                           href="#delete_materia<?php echo $id; ?>" data-toggle="modal"></a>
                                           <?php echo"<a href='modifMateria.php?dni=$id'>   <img src='../img/update.png' border='0' alt='Link to this page' width= 25px></a>"; // include('modal_delete_Colabor.php');   ?>

                                        <a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" 
                                           href="#edit<?php echo $id; ?>" data-toggle="modal"></a>
                                           <?php echo"<a href='eliminarMateria.php?id=$id'>   <img src='../img/Delete_Icon.png' border='0' alt='Link to this page' width= 28px></a>"; //include('modal_edit_Colabor.php');   ?>

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
<?php include('footer.php') ?>