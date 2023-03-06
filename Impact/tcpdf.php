<?php
require_once('tcpdf/tcpdf.php');

$pdf = new TCPDF();
$pdf->AddPage();

$html = '<table>';
$html .= '<thead><tr><th>Nama</th><th>Email</th><th>No. HP</th><th>No. KTP</th><th>Instansi</th></tr></thead>';
$html .= '<tbody>';
// Loop through your data and add rows to the table
foreach ($data as $row) {
  $html .= '<tr>';
  $html .= '<td>'.$row['nama'].'</td>';
  $html .= '<td>'.$row['email'].'</td>';
  $html .= '<td>'.$row['no_hp'].'</td>';
  $html .= '<td>'.$row['no_ktp'].'</td>';
  $html .= '<td>'.$row['instansi'].'</td>';
  $html .= '</tr>';
}
$html .= '</tbody></table>';

$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('report.pdf', 'D');
?>