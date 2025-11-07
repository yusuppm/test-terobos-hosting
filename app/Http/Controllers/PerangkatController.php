<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller; // Pastikan ini ada

class PerangkatController extends Controller
{
    /**
     * Menampilkan halaman perangkat.
     */
    public function index()
    {
        // Mengarah ke: resources/views/pages/perangkat.blade.php
        return view('pages.perangkat'); 
    }
}