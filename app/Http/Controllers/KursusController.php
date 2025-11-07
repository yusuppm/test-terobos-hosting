<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;

use Illuminate\Http\Request;

class KursusController extends Controller
{
    public function info()
    {
        return view('pembelajaran.pembelajaran-info'); 
    }
    public function index()
    {
        return view('pembelajaran.kursus'); 
    }
}