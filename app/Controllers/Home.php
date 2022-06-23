<?php

namespace App\Controllers;

use BadFunctionCallException;
use Dompdf\Dompdf;

class Home extends BaseController
{
    public function index()
    {
        return view('main');
    }

    public function label()
    {
        $filename = "label";

        $pdf = new Dompdf();
        //$content = file_get_contents(view('transaction/invpdf', $data));
        $pdf->loadHtml(view('transaction/label'));
        $pdf->setPaper('A4','Potrait');
        $pdf->render();

        $pdf->stream($filename,array("Attachment"=>0));
    }
}
