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
}
