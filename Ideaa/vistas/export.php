<?php 
$conexion = mysql_connect ("localhost", "root", "");
 mysql_select_db ("db_ideaa", $conexion);    
 $sql = "select *FROM t_usuario where rol_user='3' ORDER BY dni_user ASC";
 $resultado = mysql_query ($sql, $conexion) or die (mysql_error ());
 $registros = mysql_num_rows ($resultado);
  if ($registros > 0) {
   require_once 'Classes/PHPExcel.php';
   $objPHPExcel = new PHPExcel(); 
   //Informacion del excel
   $objPHPExcel->
    getProperties()
        ->setCreator("Grupode_Estudio.com")
        ->setLastModifiedBy("Andresmanrique.GrupoEstudio")
        ->setTitle("Exportar excel desde mysql")
        ->setSubject("Ejemplo 1")
        ->setDescription("Documento generado con PHPExcel")
        ->setKeywords("con  phpexcel")
        ->setCategory("Aspirantes");    
 
   $i = 1;    
   while ($registro = mysql_fetch_object ($resultado)) {
      $objPHPExcel->setActiveSheetIndex(0)
             ->setCellValue('A'.$i, $i)
            ->setCellValue('B'.$i, $registro->dni_user)
            ->setCellValue('C'.$i, $registro->nom_user)
            ->setCellValue('D'.$i, $registro->apell_user)
               ->setCellValue('E'.$i, $registro->mail_user)
            ->setCellValue('F'.$i, $registro->sex_user)
               ->setCellValue('G'.$i, $registro->tel_user)
            ->setCellValue('H'.$i, $registro->estrato_user);
     
      
      $i++;
       
   }
}
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Lista_Aspirantes_Datos.xlsx"');
header('Cache-Control: max-age=0');
 
$objWriter=PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');
$objWriter->save('php://output');
exit;
mysql_close ();

?>