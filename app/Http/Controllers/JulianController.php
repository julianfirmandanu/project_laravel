<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JulianController extends Controller
{
    public function index()
    {
        return view('julian.index');
    }
    public function index_next()
    {
        return view('julian.index_next');
    }
}
