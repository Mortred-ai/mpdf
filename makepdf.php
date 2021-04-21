<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf   =   new \Mpdf\Mpdf(['orientation' => 'L']);
// //GRAB VARIABLE
// $FILES      = 'mypdf.pdf';
$fname       = $_GET['fname'];
$lname       = $_GET['lname'];
$message     = $_GET['message'];

// //CREATE new PDF instance

// //KURSUSONLINE
$pageCount = $mpdf->setSourceFile("mypdf2.pdf");
$tplId = $mpdf->importPage($pageCount);
$mpdf->SetPageTemplate($tplId);

// // //CREATE our PDF
// // $data   =   '';
// // $data   =   '<h2>Tittle</h2>';


// // //ADD DATA
// // $data   .=  '<br />' . '<Strong>Nama</Strong>' . '<br />' . $fname . '<br />' . '<br />';
// // $data   .=  '<br />' .  '<Strong>Judul</Strong>' . '<br />' . $lname . '<br />' . '<br />';


// // if ($message) {
// //     $data .= '<br />' . '<Strong>Content</Strong>' . '<br />' . $message;
// // } 

$mpdf->WriteFixedPosHTML(" <span style=' font-size: 40px; color: orange; font-weight: bold'>
                            Certificate of Completion </span> ", 36, 25, 200, 50);
$mpdf->WriteFixedPosHTML(" <div class='bg-yellow' font-family : Sans; style=' font-size: 25px; color: orange; font-weight: bold'>
  {$lname}  </div> ", 38, 69, 200, 50);
// $mpdf->WriteFixedPosHTML(" <span style=' font-size: 15px;'>
//                             Nama Peserta</span> ", 15, 45, 200, 50);


// // $mpdf->WriteHTML($data); 
$mpdf->Output();

// $file = 'mypdf2.pdf';
// header('Content-type:application/pdf');
// header('Content-Disposition: inline; filename="' . $file . '"');
// header('Content-Transfer-Encoding: binary');
// header('Accept-Ranges: bytes');
// @readfile($file);
