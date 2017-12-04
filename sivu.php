<?php

if (!empty($_POST['submit'])){

 $etunimi = $_POST['etunimi'];
 $sukunimi = $_POST['sukunimi'];
 $email = $_POST['email'];
 $tel = $_POST['tel'];


}

require_once("tcpdf.php");

//require_once("formi.php");

$pdf = new TCPDF();
//var_dump(get_class_methods($pdf));
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

$pdf->SetFont('dejavusans', '', 14, '', true);


$pdf->AddPage();
$pdf->Image('examples/images/tcpdf_logo.jpg');
//$pdf->SetFont("helvetica", "B", "20");
$pdf->SetX(150);
$pdf->Cell(50,10,"Tapahtumalippu",1, 1, "C");

//$pdf->write($_POST['etunimi']);

$html5="<p>{$etunimi}</p>";
$html6="<p>{$sukunimi}</p>";
$html7="<p>{$email}</p>";
$html8="<p>{$tel}</p>";
$html1="<h1>Weekend Festival 2017</h1>";
$html2="<p>2 paivaa</p>";


$html3="<h4>KYLASAARI</h4>";
$html4="<p>Kylasaarenkatu 12, 00580 Helsinki</p>";
$html9="<p>118,50 euroa</p>";



$pdf->ln(40);
$pdf->writeHTMLCell(0, 0, '', '', $html5, 0, 1, 0, true, '', true);
$pdf->writeHTMLCell(0, 0, '', '', $html6, 0, 1, 0, true, '', true);
$pdf->writeHTMLCell(0, 0, '', '', $html7, 0, 1, 0, true, '', true);
$pdf->writeHTMLCell(0, 0, '', '', $html8, 0, 1, 0, true, '', true);
$pdf->ln(40);
$pdf->writeHTMLCell(0, 0, '', '', $html1, 0, 1, 0, true, '', true);
$pdf->writeHTMLCell(0, 0, '', '', $html2, 0, 1, 0, true, '', true);


$pdf->ln(15); //empty lines
$pdf->writeHTMLCell(0, 0, '', '', $html3, 0, 1, 0, true, '', true);
$pdf->ln(2);
$pdf->writeHTMLCell(0, 0, '', '', $html4, 0, 1, 0, true, '', true);
$pdf->SetX(150);
$pdf->writeHTMLCell(0, 0, '', '', $html9, 0, 1, 0, true, '', true);




/*
$pdf->SetFont("", "", "20");
$pdf->write(100, "Weekend Festival 2017");
*/

//$pdf->write(100, "Kahden päivän lippu");

//$pdf->write(110, "2 päivän lippu 118,50 €");


$pdf->Output('lippu.pdf', 'I');


?>



