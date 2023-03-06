<?php
require_once('phpexcel/Classes/PHPExcel.php');

$objPHPExcel = new PHPExcel();
$objPHPExcel->getActiveSheet()->setTitle('Report');

$objPHPExcel->getActiveSheet()->setCellValue('A1', 'Nama');
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'Email');
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'No. HP');
$objPHPExcel->getActiveSheet()->setCellValue('D1', 'No. KTP');
$objPHPExcel->getActiveSheet()->setCellValue('E1', 'Instansi');

$row = 2;
// Loop through your data and add rows to the worksheet
foreach ($data as $item) {
  $objPHPExcel->getActiveSheet()->setCellValue('A'.$row, $item['nama']);
  $objPHPExcel->getActiveSheet()->setCellValue('B'.$row, $item['email']);
  $objPHPExcel->getActiveSheet()->setCellValue('C'.$row, $item['no_hp']);
  $objPHPExcel->getActiveSheet()->setCellValue('D'.$row, $item['no_ktp']);
  $objPHPExcel->getActiveSheet()->setCellValue('E'.$row, $item['instansi']);
  $row++;
}

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('report.xlsx');

?>