<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Http\Controllers\Controller;

class KategoriPenulisController extends Controller
{
     public function index()
    {
        $kategori = Kategori::all();
        return view('penulis.kategori.index', compact('kategori'));
    }

}