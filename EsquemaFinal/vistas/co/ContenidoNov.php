<?php include('header.php'); ?>
<?php include("./BarrNavCol.php"); ?>			
<?php include("../../3modelo/autenticacion.php"); ?>

<?php
include("../../3modelo/conexion.php");
//  $identificadorNovedad = $_GET['id'];
?>
<br><br>
 
<?php
$identificadorNovedad = $_GET['id'];
$consulta = mysql_query("select * from t_novedad where id='$identificadorNovedad'");
while ($fila = mysql_fetch_array($consulta)) {
    //http://www.bienestarbogota.unal.edu.co/ver_noticia.php?id_noticia=319
    
    
    echo " <h6 aling ='LEFT'>". $fila['Fecha_novedad']."</h6><br>";
    echo "<center>";
    echo "<table width='900' border='0' cellspacing='6' > ";
    echo " <tr align='center' valign='middle'>";
    echo "<th colspan='6'><h4>";
    echo $fila['Titulo_Novedad']."</h4></th></tr>";
    echo " <tr align='center' valign='middle'>"; 
    echo " <th rowspan='2'><img src='../../fotos/" . $fila['Imagen_novedad'] ." ' width=300px></th>";
    echo "<tr><td><i><h6>";
    echo $fila['Descripcion_novedad'] . "<h6></i></td></tr>";      
    echo "<tr> <th colspan='2'> <br><br> <h5>";
    echo $fila['Contenido_Novedad'] . "</h5></th></tr>";
    echo "   </table></center>";
}
?>

<?php include("../footer.php"); ?>
