<?php

namespace App\Http\Controllers\Compra;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;

class HomeController extends Controller
{
    public function downloadPDF()
    {
        $pdf = PDF::loadView('compra.reporte.solicitud');
        //return $pdf->download('invoice.pdf');
        return $pdf->stream('my.pdf',array('Attachment'=>0));
    }
}
