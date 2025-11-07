<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller; // Pastikan ini ada

class ContactController extends Controller
{
    /**
     * Menampilkan halaman kontak.
     */
    public function index()
    {
        // Mengarah ke: resources/views/pages/kontak.blade.php
        return view('pages.kontak'); 
    }
}