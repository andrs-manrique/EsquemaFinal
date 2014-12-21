<?php include('header.php'); ?>
<?php include("BarraNavegacionadmin.php"); ?>			
<?php include("../3modelo/autenticacion.php"); ?>
<div  align="center" >
    <div class="container" align="center">
        <div class="margin-top">
            <div class="row">	
                <br><br>			     	 

                <table cellpadding="0" cellspacing="0" border="2" class="table  table-bordered" id="example">
                    <div class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong><i class="icon-user icon-large"></i>&nbsp;Tabla Materias</strong><br><br>   
                    </div>
                    <thead>
                        <tr>

                            <th>Identificacion</th>
                            <th>Materia</th>
                            <th>Objetivo Materia</th>                                 
                            <th>Descripcion Materia</th> 
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        //include("../3modelo/conexion.php");

                        mysql_select_db('db_ideaa', mysql_connect('localhost', 'root', '')) or die(mysql_error());

                        $consultaM = mysql_query("select * from t_materia  ORDER BY id_materia ASC ") or
                                die(mysql_error());


                        while ($row = mysql_fetch_array($consultaM)) {
                            $idmat = $row['id_materia'];
                            ?>
                            <tr class="del<?php echo $idmat ?>">
                                <td><?php echo $row['id_materia']; ?></td> 
                                <td><?php echo $row['nom_materia']; ?></td> 

                                <td><?php echo $row['objetivo_materia']; ?></td> 
                                <td><?php echo $row['desc_materia']; ?></td> 

                            </tr>
                        <?php } ?>

                    </tbody>
                </table>



                <td><?//php echo"<a href='verDatosColaborador.php?id=$id'>Ver Más</a>"; ?></td>

                <td width="100">

                  <!--  <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>"  
                       href="#delete_user<?//php echo $id; ?>" data-toggle="modal" 

                       class="btn btn-danger"><i class="icon-trash icon-large"></i></a>--> 
                       <?php echo"<a href='eliminarMateria.php?id=$idmat'>Borrar</a>"; // include('modal_delete_Colabor.php');  ?>

                    <a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" 
                       href="#edit<?php echo $id; ?>" data-toggle="modal" 

                       class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                        <?php echo"<a href='editarMateria.php?id=$idmat'>Editar</a>"; //include('modal_edit_Colabor.php');  ?>
                </td>




            </div>		
        </div>
    </div>
</div>
<?php include('footer.php') ?>


