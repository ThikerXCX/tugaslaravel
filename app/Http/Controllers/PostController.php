<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(){
        $berita = Berita::all();
        return view('dashboard.berita.index',compact('berita'));
    }
    public function show(Berita $berita)
    {
        return view('dashboard.berita.detail',compact('berita'));
    }
}
