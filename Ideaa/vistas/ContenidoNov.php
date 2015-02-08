<?php include('./header_1.php'); ?>
<?php include("./BarraNavegacionadmin.php"); ?>			
<?php include("../3modelo/autenticacion.php"); ?>
<?php
include("../3modelo/conexion.php");
//  $identificadorNovedad = $_GET['id'];
?>
<br>
<?php
$identificadorNovedad = $_GET['id'];
$consulta = mysql_query("select * from t_novedad where id='$identificadorNovedad'");
while ($fila = mysql_fetch_array($consulta)) {
    //http://www.bienestarbogota.unal.edu.co/ver_noticia.php?id_noticia=319
    
      echo "<center>";
          echo "<table width='900' border='0' cellspacing='90' >";
          echo "<tr>"   ;
          echo "<th colspan='1'>";
           echo"<h6 >";
          echo"<td>".$fila['Fecha_novedad']." ";
          echo "</td>";
          echo"</h6>";
          echo "</th>";
          echo" </tr>";
          
    echo " <tr align='center' valign='middle'>";
    echo "<th colspan='2'><h4>";
    echo $fila['Titulo_Novedad']."</h4></th></tr>";
    echo " <tr align='center' valign='middle'>"; 
    echo " <th rowspan='3'><img src='../img/" . $fila['Imagen_novedad'] ." ' width=300px></th>";
    echo "<tr><th><i><h6>";
    echo $fila['Descripcion_novedad'] . "<h6></i></th></tr>";      
    echo "<tr> <th colspan='6'><p align=justify> 
<h5>";
    echo $fila['Contenido_Novedad'] . "</p> </h5></th></tr>";
    echo "   </table></center>";
}
?>

<?php include("./footer.php"); ?>
