<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;


class HomeController extends Controller
{
    public function index()
    {
        // ngirim view
        return view('pages.home');
    }
}