<?php

namespace App\Http\Controllers;

use App\Models\User;
use Mccarlosen\LaravelMpdf\Facades\LaravelMpdf as PDF;
use Mpdf\MpdfException;


class PdfController extends Controller
{
    /**
     * @throws MpdfException
     */
    public function pdfGenerate()
    {
        $data = [
            'name' => 'মোঃ আশিক আহমেদ'
        ];
        $pdf = PDF::loadView('pdf.document', compact('data')); //view file location
        return $pdf->download('pdf.pdf');
    }
}
