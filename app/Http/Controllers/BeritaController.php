<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        return view('news', [
            'news' => Berita::all()
        ]);
    }

    public function show(Berita $berita)
    {   
        return view('newsDetail', [
            "newsPost" => $berita
        ]);
    }
}
