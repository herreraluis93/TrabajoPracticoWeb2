<?php
require('helper/fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{

    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    $this->Cell(62);
    // Título
    $this->Cell(70,10,'Reporte de Contenidistas',0,0,'C');
    // Salto de línea
    $this->Ln(20);
    $this->Cell(45, 10, 'Nombre', 1, 0, 'C', 0);
    $this->Cell(45, 10, 'Apellido', 1, 0, 'C', 0);
    $this->Cell(90, 10, 'Email', 1, 1, 'C', 0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}



$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);
foreach($contenidistas as $contenidista){
    $pdf->Cell(45, 10, $contenidista[0], 1, 0, 'C', 0);
    $pdf->Cell(45, 10, $contenidista[1], 1, 0, 'C', 0);
    $pdf->Cell(90, 10, $contenidista[2], 1, 1, 'C', 0);
}
$pdf->Output(); 
?>