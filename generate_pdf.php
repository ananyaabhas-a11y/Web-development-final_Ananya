<?php
session_start();
if (!isset($_SESSION['student_id'])) {
    header('Location: index.html');
    exit();
}

require_once('fpdf/fpdf.php');

$type = $_GET['type'] ?? '';
$student = $_SESSION['student_data'];

class PDF extends FPDF {
    function Header() {
        $this->SetFont('Arial', 'B', 16);
        $this->Cell(0, 10, 'Hogwarts School of Witchcraft and Wizardry', 0, 1, 'C');
        $this->Ln(5);
    }
    
    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
    }
}

$pdf = new PDF();
$pdf->AddPage();

if ($type === 'grades') {
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 10, 'Grade Report', 0, 1);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 8, 'Student: ' . $student['full_name'], 0, 1);
    $pdf->Cell(0, 8, 'House: ' . $student['house'], 0, 1);
    $pdf->Ln(5);
    
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(70, 10, 'Subject', 1);
    $pdf->Cell(30, 10, 'Grade', 1);
    $pdf->Cell(90, 10, 'Remarks', 1);
    $pdf->Ln();
    
    $pdf->SetFont('Arial', '', 11);
    $grades = [
        ['Potions', 'E', 'Exceeds Expectations'],
        ['Defense Against the Dark Arts', 'O', 'Outstanding'],
        ['Transfiguration', 'A', 'Acceptable'],
        ['Charms', 'E', 'Exceeds Expectations'],
        ['Herbology', 'O', 'Outstanding']
    ];
    
    foreach ($grades as $grade) {
        $pdf->Cell(70, 8, $grade[0], 1);
        $pdf->Cell(30, 8, $grade[1], 1);
        $pdf->Cell(90, 8, $grade[2], 1);
        $pdf->Ln();
    }
} elseif ($type === 'calendar') {
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 10, 'Academic Calendar 2025-2026', 0, 1);
    $pdf->Ln(5);
    
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(50, 10, 'Date', 1);
    $pdf->Cell(140, 10, 'Event', 1);
    $pdf->Ln();
    
    $pdf->SetFont('Arial', '', 11);
    $events = [
        ['Sept 1', 'Term Begins'],
        ['Oct 31', 'Halloween Feast'],
        ['Dec 20', 'Winter Break Begins'],
        ['Jan 5', 'Classes Resume'],
        ['June 15', 'Final Exams']
    ];
    
    foreach ($events as $event) {
        $pdf->Cell(50, 8, $event[0], 1);
        $pdf->Cell(140, 8, $event[1], 1);
        $pdf->Ln();
    }
}

$pdf->Output('D', $type . '_report.pdf');
?>
