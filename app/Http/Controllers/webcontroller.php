<?php

namespace App\Http\Controllers;
use App\Models\Berita;


use Illuminate\Http\Request;

class webcontroller extends Controller
{
    //
    public function index()
    {
        $berita = Berita::all();
        return view('web.home', compact('berita'));
    }

    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        return view('web.show', compact('berita'));
    }

    public function kategori($id)
    {
        $berita = Berita::where('kategori_id', $id)->paginate(2);
        return view('web.kategori', compact('berita'));
    }

}
