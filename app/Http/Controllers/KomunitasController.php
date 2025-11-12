<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller; 

class KomunitasController extends Controller
{
    public function index()
    {
           //ngarah ke resources/views/pages/komunitas.blade.php
        return view('pages.komunitas'); 
    }
}