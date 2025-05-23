<?php

namespace App\Http\Controllers;

use App\Models\Kajur;
use App\Models\Mahasiswa;

class DashboardController extends Controller
{
    public function index()
    {
        $Kajur = Kajur::count();
        $Mahasiswa = Mahasiswa::count();
        return view('dashboard', compact('Kajur', 'Mahasiswa'));
    }
}
