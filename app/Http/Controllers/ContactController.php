<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContactController extends Controller
{
    public function index()
    {
        // ngarah ke: resources/views/pages/kontak.blade.php
        return view('pages.kontak'); 
    }
}