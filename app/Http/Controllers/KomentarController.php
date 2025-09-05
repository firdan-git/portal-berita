<?php

namespace App\Http\Controllers;

use App\Models\Komentar;

use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function store(Request $request, $id)
    {
        $request->validate([
            'isi' => 'required|string|max:500',
        ]);

        Komentar::create([
            'isi' => $request->isi,
            'berita_id' => $id,
            'user_id' => auth()->id(), // kalau ada login
        ]);

        return redirect()->back()->with('success', 'Komentar Terkirim.');
    }
}