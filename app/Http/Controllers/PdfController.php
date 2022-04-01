<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function generatePdf()
    {
        $pdfName = 'guardian-email'. time(). '.pdf';
        $pdf = PDF::loadView('emails.guardians.registration');
        return $pdf->download($pdfName);
    }
}
