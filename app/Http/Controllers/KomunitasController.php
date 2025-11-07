<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller; // Pastikan ini ada

class KomunitasController extends Controller
{
    public function index()
    {
        // Diubah agar mengarah ke file barumu:
        // resources/views/pages/komunitas.blade.php
        return view('pages.komunitas'); 
    }
}