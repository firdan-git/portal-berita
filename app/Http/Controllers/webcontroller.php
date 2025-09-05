<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $berita = Berita::all();
         $viral = Berita::orderBy('views', 'desc')->first();

        return view('web.home', compact('berita', 'viral'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        //
         $berita = Berita::where('slug', $slug)->first();

          // Tambah jumlah views
          if ($berita) {
                $berita->increment('views');
            } else {
                 abort(404, 'Berita tidak ditemukan');
}


        return view('web.show', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function kategori($id)
    {
        //
        $berita = Berita::where('kategori_id', $id)->paginate(2);
        return view('web.kategori', compact('berita'));
    }

}