<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class Pdfcontroller extends Controller
{
    // return view ('pdf',compact('<h1>Hello</h1>'));

    $data =[
        'title' => 'welcome to SEEREE',
        'date' => date('m/d/Y')
    ];
    $pdf = PDF:: loadView('pdf',$data);
    return $pdf
}
