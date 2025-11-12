<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PerangkatController extends Controller
{
    public function index()
    {
        // ngarah ke: resources/views/pages/perangkat.blade.php
        return view('pages.perangkat'); 
    }
}