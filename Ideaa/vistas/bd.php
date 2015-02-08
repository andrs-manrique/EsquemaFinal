<?php include('header.php'); ?>
<?php include("BarraNavegacionadmin.php"); ?>			
<?php include("../3modelo/autenticacion.php"); ?>
<div  align="" >
    <div  align="">
    <ul>       
        <li><a href='#'>Exportar </a>
            <ul>
                <li><a target='_blank' href=' listado_generalA.php'> R. Colaborador</a></li>
                <li><a target='_blank' href='listado_generalB.php'>R. Aspirante total </a></li>
                <li><a target='_blank' href='listado_generalC.php'>R. Aspirante Activos </a></li>
                <li><a target='_blank' href='listado_generalD.php'>R. Aspirante Bloqueado </a></li>  
                <li><a target='_blank' href='listado_generalE.php'>R. Aspirante Clasificacion A </a></li>
                <li><a target='_blank' href='listado_generalf.php'>R. Aspirante Clasificacion B </a></li>
                <li><a target='_blank' href='listado_generalg.php'>R. Aspirante Clasificacion C </a></li>
                <li><a target='' href='export.php'> Reporte Aspirantes Excel Registrados</a></li>
                <li><a target='' href='export2.php'> Reporte Aspirantes Excel Activos</a></li>
            </ul>
        </li>
    </ul>
</div>
</div>
<?php include("footer.php"); ?>		