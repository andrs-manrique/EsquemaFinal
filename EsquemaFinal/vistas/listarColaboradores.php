<!doctype html>
<?php include("header.php"); ?>
<?php include("../3modelo/autenticacion.php"); ?>
<?php include("head.php"); ?>	
<?php include("BarraNavegacionadmin.php"); ?>

<div class="container" align="center">
    <div class="margin-top">
        <div class="row">	
            <br><br>			     	 

            <table cellpadding="0" cellspacing="0" border="2" class="table  table-bordered" id="example">
                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong><i class="icon-user icon-large"></i>&nbsp;Tabla Colaboradores</strong>
                </div>
                <thead>
                    <tr>S 
                        <th>Identificacion</th>
                        <th>Tipo Doc</th>
                        <th>Nombre</th>                                 
                        <th>Apellido</th> 
                        <th>Contacto</th>                                 
                        <th>Rol</th>   

                        <th>Ver Información</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>


                    <?php
                    //include("../3modelo/conexion.php");

                    mysql_select_db('db_ideaa', mysql_connect('localhost', 'root', '')) or die(mysql_error());

                    $user_query = mysql_query("select * from t_usuario where rol_user=2 ORDER BY dni_user ASC ") or
                            die(mysql_error());
                    //  $arch =" <a href='Archivos/{$row['archivo_aspi']}' >Ver Documento</a> ";

                    while ($row = mysql_fetch_array($user_query)) {
                        $id = $row['dni_user'];
                        ?>
                        <tr class="del<?php echo $id ?>">
                            <td><?php echo $row['dni_user']; ?></td> 
                            <td><?php echo $row['nom_user']; ?></td> 

                            <td><?php echo $row['nom_user']; ?></td> 
                            <td><?php echo $row['apell_user']; ?></td> 
                            <td><?php echo $row['tel_user']; ?></td> 
                            <td><?php echo $row['rol_user']; ?></td>


                            <td><?php echo"<a href='info_col.php?id=$id'>Ver Más</a>"; ?></td>
    <?php //   <td> <?php echo "<a href='../Archivos/{$row['archivo_aspi']}' >Ver Documento</a> " </td>   ?>
                            <td width="100">

                                <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>"  
                                   href="#delete_user<?php echo $id; ?>" data-toggle="modal"  
                                   class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
    <?php echo"<a href='info_col.php?dni=$id'>Borrar</a>"; // include('modal_delete_Colabor.php');  ?>

                                <a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" 
                                   href="#edit<?php echo $id; ?>" data-toggle="modal" 
                                   class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
    <?php echo"<a href='info_col.php?dni=$id'>Editar</a>"; //include('modal_edit_Colabor.php');  ?>
                            </td>



    <?php //include('toolttip_edit_delete.php');  ?>
                            <!-- Modal edit user -->

                        </tr>
<?php } ?>

                </tbody>
            </table>

            <script type="text/javascript">

            </script>


        </div>		
    </div>
</div>
</div>
<?php include('footer.php') ?>
