<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Logo
        //$this->Image('logo.png', 10, 8, 33);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 15);
        // Movernos a la derecha
        $this->Cell(60);
        // Título
        $this->Cell(80, 10,'REPORTE DE PRODUCTOS', 1, 0, 'C');
        // Salto de línea
        $this->Ln(20);
        
        $this->Cell(80, 10, 'Nombre',1,0,'C',0);
        $this->Cell(25, 10,'Codigo',1,0,'C',0);
        $this->Cell(30, 10,'Marca',1,0,'C',0);
        $this->Cell(30, 10,'Precio',1,0,'C',0);
        $this->Cell(25, 10,'Cantidad',1,1,'C',0);

    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10,utf8_decode('Página ') . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

require 'cn.php';
$consulta = "SELECT * FROM productos";
$resultado = $mysqli->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 16);

while($row = $resultado->fetch_assoc()){
    $pdf->Cell(80, 10, $row['nombre'],1,0,'C',0);
    $pdf->Cell(25, 10, $row['codigo'],1,0,'C',0);
    $pdf->Cell(30, 10, $row['marca'],1,0,'C',0);
    $pdf->Cell(30, 10, $row['precio'],1,0,'C',0);
    $pdf->Cell(25, 10, $row['cantidad'],1,1,'C',0);
}
$pdf->Output();
