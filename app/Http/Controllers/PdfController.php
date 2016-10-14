<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use View;
use App\Http\Requests;

class PdfController extends Controller
{
    public function invoice() 
    {
        $companies = Company::all();
        $date = date('Y-m-d');
        $invoice = "2222";
        $view = View::make('pdf.companies', compact('companies', 'date', 'invoice'))->render();

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('Dependencias.pdf'); 
    }
}
