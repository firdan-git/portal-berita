<?php

namespace App\Http\Controllers;

use App\Models\Berita;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $berita = Berita::all();
        return view('admin.dashboard', compact('berita'));
    }
}