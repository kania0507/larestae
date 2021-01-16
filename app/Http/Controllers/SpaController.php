<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpaController extends Controller
{
    // frontend
    public function index()
    {
        return view('spa');
    }
}
