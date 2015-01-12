<?php include('header_1.php'); ?>
<?php include("BarraNavegacionadmin.php"); ?>			
<?php include("../3modelo/autenticacion.php"); ?>
<br><br><br>
<div aling="center">
    <div class="container">
        <div class="margin-top">
            <div class="row">	
                <div class="span13">
                    <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><i class="icon-user icon-large"></i>&nbsp;COLABORADORES</strong>
                        </div>
                        <thead>
                            <tr>
                                <th>Identificacion</th>
                                <th>Nombre</th>                                 
                                <th>Apellido</th>     
                                <th>Materia</th>  
                                <th>Estado</th>  
                                <th>Consultar</th> 
                                <th>Estado</th>
                                    <th>Acciones</th>                            
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $user_query2 = mysql_query("select *FROM t_usuario where rol_user='2' ORDER BY dni_user ASC") or die(mysql_error());
                            while ($row = mysql_fetch_array($user_query2)) {
                                $id = $row['dni_user'];
                                ?>
                                <tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['dni_user']; ?></td> 
                                    <td><?php echo $row['nom_user']; ?></td> 
                                    <td><?php echo $row['apell_user']; ?></td>
                                    <td><?php echo $row['id_materia_user']." "; ?>
                                         <?php
                                                           include("../3modelo/conexion.php");
                                                           $consulta5 = mysql_query("select * from t_materia where id_materia=$row[id_materia_user];");
                                                           while ($r = mysql_fetch_array($consulta5)) {
                                                               echo $r['nom_materia'];
                                                           }
                                                           ?>   
                                    </td>
                                    <td><?php echo $row['id_estado']; ?>
                                                 <?php
                                                           include("../3modelo/conexion.php");
                                                           $consulta = mysql_query("select * from t_estado_user where id_estado=$row[id_estado];");
                                                           while ($w = mysql_fetch_array($consulta)) {
                                                               echo $w['nom_estado'];
                                                           }
                                                           ?>   
                                    </td>
                                   
                                    
                                    
                                    
                                    
                                    
                                    
                                    <td><?php echo"<a href='verDatosColaborador.php?id=$id'>Ver Más</a>"; ?></td>
                                   <td width="70">
 <a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" 
                                               href="#edit<?php echo $id; ?>" data-toggle="modal"></a>
                                               <?php
                                               echo"<a href='updateEstado.php?dni=$id'>  "
                                               . " <img src='../img/lock.png' border='0' alt='Link to this page' width= 25px></a>"; //include('modal_edit_Colabor.php');   
                                               ?>

                                            <a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" 
                                               href="#edit<?php echo $id; ?>" data-toggle="modal"></a>
                                               <?php
                                               echo"<a href='updateEstadoacti.php?dni=$id'>  "
                                               . " <img src='../img/acti.png' border='0' alt='Link to this page' width= 25px></a>"; //include('modal_edit_Colabor.php');   
                                               ?>
                                        </td>
                                        <td>
                                            
                                            <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>"  
                                               href="#delete_user<?php echo $id; ?>" data-toggle="modal"></a>
                                               <?php
                                               echo"<a href='modif_colaborador.php?dni=$id'>  "
                                               . " <img src='../img/update.png' border='0' alt='Link to this page' width= 25px></a>"; // include('modal_delete_Colabor.php');   
                                               ?>

                                           


                                            <a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" 
                                               href="#edit<?php echo $id; ?>" data-toggle="modal"></a>
    <?php
    echo"<a href='eliminarPart.php?dni=$id'>  "
    . " <img src='../img/Delete_Icon.png' border='0' alt='Link to this page' width= 28px></a>"; //include('modal_edit_Colabor.php');   
    ?>

                                        </td>
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