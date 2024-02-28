<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF;
class CertificateController extends Controller
{
    public function apply()
    {
        return view('certificate.apply');
    }

    public function show(string $id)
    {
        $data = Certificate::findOrFail($id);
        return view('certificate.show', compact('data'));
    }

    public function download()
    {
        $councilor = User::where('title', 'Councilor')->first();
        $mayor = User::where('title', 'Mayor')->first();
        $pdf = PDF::loadView('pdf.document', compact('councilor', 'mayor')); //view file location
        return $pdf->download('pdf.pdf');
    }

}
