<?php

namespace App\Http\Controllers;

use App\Http\Requests\BeritaRequest;
use App\Models\Berita;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class PostController extends Controller
{
    public function index(){
        $berita = Berita::all();
        return view('dashboard.berita.index',compact('berita'));
    }
    public function create()
    {
        return view('dashboard.berita.create');
    }
    public function show(Berita $berita)
    {
        return view('dashboard.berita.detail',compact('berita'));
    }
    public function store(BeritaRequest $request)
    {
        
    }
    public function checkSlug(Request $request)
    {
        // $slug = SlugService::createSlug(Berita::class,'slug',$request->judul);
    }
}
