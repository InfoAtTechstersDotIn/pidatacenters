<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class HTMLPDFController extends Controller
{
    public function htmlPdf(Request $request, $partner ) {

        $partner = Partner::where('id', '=', $partner)->first();

        if ($partner != null) {

            $data=[
                'company' => $partner->partnerOrgInfo->comp_name,
                'expdate' => $request->expdate,
            ];

            $pdf = PDF::loadView('htmlView', $data);    

            $path = public_path('pdf_docs/');
            $filename = "certificate.pdf";
            $pdf->save($path . '/' . $filename);
            $generated_pdf_link = url('pdf_docs/'.$filename);
            return response()->json($generated_pdf_link);

        } else{
            return response()->json([
                'status' => 'error',
                'message' => 'Partner not found',
            ]);
        }

        

        
  
    }
}
