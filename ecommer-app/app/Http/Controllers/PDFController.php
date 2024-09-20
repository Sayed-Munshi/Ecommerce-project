<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    /**
     * Order Invoice
    */
    function download_invoice($id)
    {
        $order_id = $id;

        $pdf = Pdf::loadView('frontend.download.order_invoice', [
            'order_id' => $order_id
        ]);

        return $pdf->download('Order-Invoice.pdf');
    }
}
