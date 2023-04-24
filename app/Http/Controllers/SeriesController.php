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
        return view('series.index')->with ('series', $series);
    }

    public function create()
    {
        return view ('series.create');
    }
}
