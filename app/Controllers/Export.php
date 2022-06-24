<?php

namespace App\Controllers;

use App\Models\SellRecordModel;

class Export extends BaseController
{
    public function index()
    {
        $SellRecordModel = new SellRecordModel();
        $SellRecordModel->orderBy('id', 'desc');
        $records = $SellRecordModel->findAll();
        $no = 1;


        $pdf = new \FPDF();
        $pdf->AddPage();

        $pdf->SetFont('Arial', 'B', 20);
        $pdf->Cell(190, 7, 'KETA TRAVEL', 0, 1, 'C');

        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(190, 7, 'LAPORAN PENJUALAN', 0, 1, 'C');
        $pdf->Cell(10, 7, '', 0, 1, 'C');

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 7, 'No.', 1, 0, 'C');
        $pdf->Cell(60, 7, 'Bulan', 1, 0, 'C');
        $pdf->Cell(40, 7, 'Tahun', 1, 0, 'C');
        $pdf->Cell(40, 7, 'Jumlah Penjualan', 1, 1, 'C');

        $pdf->SetFont('Arial', '', 10);
        foreach ($records as $record) {
            $pdf->Cell(10, 7, $no++, 1, 0, 'C');
            $pdf->Cell(60, 7, $record['month'], 1, 0, 'C');
            $pdf->Cell(40, 7, $record['year'], 1, 0, 'C');
            $pdf->Cell(40, 7, $record['total_sell'], 1, 1, 'C');
        }
        
        $this->response->setContentType('application/pdf');
        $pdf->Output();
    }
}
