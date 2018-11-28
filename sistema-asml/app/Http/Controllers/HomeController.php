<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function downloadPDF()
    {
        $pdf = PDF::loadView('pdfView');
        //return $pdf->download('invoice.pdf');
        return $pdf->stream('my.pdf', array('Attachment' => 0));
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'Usuarios.xlsx');
    }

}
