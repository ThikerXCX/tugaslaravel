<?php

namespace App\Http\Controllers;

use App\Http\Requests\BeritaRequest;
use App\Models\Berita;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\DB;

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
        $attr = $request->all();
        $attr['excerpt'] =  Str::limit(strip_tags($request->isi_berita,100));
        Berita::create($attr);
        return redirect('/berita')->with('success', 'data berhasil dimasukan');
    }
    public function destroy($id)
    {   
        DB::table('beritas')->where('id','=',$id)->delete();
        return redirect('/berita')->with('success', 'data berhasil dihapus');
    }
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Berita::class,'slug',$request->judul_berita);
        return response()->json(['slug'=>$slug]);
    }

    public function edit(Berita $berita)
    {
        return view('dashboard.berita.edit',[
            'berita' => $berita,
            'category' => Category::all()
        ]);
    }
    public function update(BeritaRequest $request,Berita $berita)
    {
        $attr = $request->all();
        $attr['excerpt'] =  Str::limit(strip_tags($request->isi_berita,100));
        Berita::where('id',$berita->id)->update([
            'category_id' => $attr['category_id'],
            'judul_berita' => $attr['judul_berita'],
            'slug' => $attr['slug'],
            'excerpt' => $attr['excerpt'],
            'isi_berita' => $attr['isi_berita'],
        ]);
        return redirect('/berita')->with('success', 'data berhasil diupdate');
    }
}
