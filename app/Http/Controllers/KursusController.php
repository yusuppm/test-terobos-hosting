<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\TopikPembelajaran; 

class KursusController extends Controller
{
   
    public function info()
    {
        // 2. Ambil semua data
        $topik = TopikPembelajaran::orderBy('order', 'asc')->get();
        
        // 3. Kirim data ke view
        return view('pembelajaran.pembelajaran-info', compact('topik'));
    }

    public function index()
    {
        return view('pembelajaran.kursus'); 
    }
}