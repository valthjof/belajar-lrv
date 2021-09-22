<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return "Ini Dari Home Controller";
    }

    public function show_html()
    {
        return view('halo');
    }
}
