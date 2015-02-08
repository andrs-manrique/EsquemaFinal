<?php include('header.php'); ?>
<?php include('./BarrNavAsp.php'); ?>
<div class="container">
    <div class="margin-top">

        <div class="details" align="center" >DIPA<?php echo "<br>" ?> Ingrese los siguientes Datos</div>		
        <form class="form-horizontal" method="POST"  action="dipaSave.php" enctype="multipart/form-data">
            <table>
                <table align="center" border="0">
                    <?php $variable = $_GET["id"]; ?>  
                        <td class="registr"><input type="hidden" name="id"  autocomplete="off" maxlength="11" ></td>
                          
                    <tr><td class="registr">Documento </td>
                        <td class="registr">
                            <input type="text" name="id_participante"  autocomplete="off" maxlength="11" value="<?php echo $variable; ?>" readonly="readonly">
                        </td>
                    </tr>
                    <tr>
                        <td class="registr">Puntaje </td>
                        <td class="registr"><input type="text" id="element_3" name="puntaje_dipa" style="width: 90px; height: 20px;">
                        </td>
                    </tr>
                    <tr>
                        <td class="registr">Observaciones </td>
                        <td class="registr"><textarea id="element_3" name="obs_dipa" style="width: 400px; height: 50px;"></textarea> 
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2" aling="center"> 
                    <h4>..::Adjuntar Imagen Dipa::..</h4>
                    <input type="file" name="archivo_dipa"  required/><br/>
                    </th>
                </tr>
                    <tr><br>
                    <td colspan="4" align="center" class="registr"> 
                        <button name="submit" type="submit" class="btn btn-success" >
                            <i class="icon-save icon-large"></i>&nbsp;Guardar</button>

                    </td>
                    </tr>
                </table>


        </form>
        <br><br>

    </div>




</div>
</div>

<?php include('../footer.php') ?>
