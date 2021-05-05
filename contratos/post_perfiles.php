<?php

    require('fpdf.php');

    class PDF extends FPDF
    {
        function Header()
        {
            $this->SetFont('Arial','U',15);
            $this->Cell(170,10,utf8_decode('Fichas Técnicas'),0,0,'C');
            $this->Ln(20);
        }

        function Footer()
        {
            $this->SetY(-15);
            $this->SetFont('Arial','I',8);
            $this->Cell(0,10,utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'C');
        }
    }

    require '../coneccion/datos_coneccion.php';
    
    $consulta = "SELECT * FROM perfil";
    $resultado = $conexion->query($consulta);
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',11);
    $pdf->SetFillColor(17,27,84);

    while($row=$resultado->fetch_assoc())
    {   
        $pdf->SetTextColor(255,255,255);
        $pdf->Cell(170,10,utf8_decode($row['NOMBRE_PERFIL']),1,1,'C',true);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(170,10,utf8_decode($row['TECLADO_DESCRIPCION']),1,1,'',0);
        $pdf->Cell(170,10,utf8_decode($row['RAM_DESCRIPCION']),1,1,'',0);
        $pdf->Cell(170,10,utf8_decode($row['VIDEO_DESCRIPCION']),1,1,'',0);
        $pdf->Cell(170,10,utf8_decode($row['MOUSE_DESCRIPCION']),1,1,'',0);
        $pdf->Cell(170,10,utf8_decode($row['GABINETE_DESCRIPCION']),1,1,'',0);
        $pdf->Cell(170,10,utf8_decode($row['CPU_DESCRIPCION']),1,1,'',0);
        $pdf->Cell(170,10,utf8_decode($row['MONITOR_DESCRIPCION']),1,1,'',0);
        $pdf->Cell(170,10,utf8_decode($row['DISCODURO_DESCRIPCION']),1,1,'',0);
        $pdf->Cell(170,10,utf8_decode($row['UNIDADES_DESCRIPCION']),1,1,'',0);
        $pdf->Cell(170,10,utf8_decode($row['VARIOS_DESCRIPCION']),1,1,'',0);
        $pdf->Ln(20);
    }
    
    $pdf->Output();
?>