<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'Dirk Gently',
            'Sherlock Holmes',
            'Stranger Things'
        ];
        return view('listar-series', compact ('series'));

}
}
