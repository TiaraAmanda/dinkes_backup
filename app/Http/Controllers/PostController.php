<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bidang;
use App\Models\Profil;
use App\Models\Ppid;
use App\Models\Institusi;
use App\Models\Spm;
use App\Models\Kabkota;
use App\Models\Agenda;
use App\Models\Data;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use \Cviebrock\EloquentSluggable\Services\SlugService;


class PostController extends Controller
{
    public function artikel(){

        return view('admin.post.artikel', [
            'halaman' => 'Data',
            'tittle' => 'Artikel',
            'bidang' => Bidang::all(),
            'post' => Post::where('kategori_post', '=', 'artikel')->get()
        ]);
    }

    public function tambahArtikel(){

        return view('admin.post.tambahartikel', [
            'halaman' => 'Data',
            'tittle' => 'Artikel',
            'bidang' => Bidang::all(),
            'post' => Post::where('kategori_post', '=', 'artikel')->get()
        ]);
    }

    public function createArtikel(Request $request){

        $validatedData = $request->validate([
            'kategori_post' => 'required',
            'bidang_id' => 'required',
            'judul' => 'required',
            'slug' => 'required',
            'tampil_headline' => '',
            'image' => 'image|file|max:2048',
            'body' => ''
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        Post::create($validatedData);

        return redirect('/data/artikel')->with('success', 'New post has been added!');
    }

    public function editArtikel(Post $post)
    {
        return view('admin.post.editartikel', [
            'halaman' => 'Data',
            'tittle' => 'Artikel',
            'bidang' => Bidang::all(),
            'post' => $post
        ]);
    }

    public function updateArtikel(Request $request, Post $post)
    {
        $rules = [
            'kategori_post' => 'required',
            'bidang_id' => 'required',
            'judul' => 'required',
            'slug' => 'required',
            'tampil_headline' => '',
            'image' => 'image|file|max:255',
            'body' => ''
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        Post::where('id', $post->id)->update($validatedData);

        return redirect('/data/artikel')->with('success', 'New post has been added!');

    }

    public function hapusArtikel(Post $post){

        Post::destroy($post->id);

        return redirect('/data/artikel')->with('success', 'New post has been added!');
    }


    public function berita(){

        return view('admin.post.berita', [
            'halaman' => 'Data',
            'tittle' => 'Berita',
            'bidang' => Bidang::all(),
            'post' => Post::where('kategori_post', '=', 'berita')->get()
        ]);
    }

    public function tambahBerita(){

        return view('admin.post.tambahberita', [
            'halaman' => 'Data',
            'tittle' => 'berita',
            'bidang' => Bidang::all(),
            'post' => Post::where('kategori_post', '=', 'berita')->get()
        ]);
    }

    public function createBerita(Request $request){

        $validatedData = $request->validate([
            'kategori_post' => 'required',
            'bidang_id' => 'required',
            'judul' => 'required',
            'slug' => 'required',
            'tampil_headline' => '',
            'image' => 'image|file|max:2048',
            'body' => ''
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        Post::create($validatedData);

        return redirect('/data/berita')->with('success', 'New post has been added!');
    }

    public function editBerita(Post $post)
    {
        return view('admin.post.editberita', [
            'halaman' => 'Data',
            'tittle' => 'Berita',
            'bidang' => Bidang::all(),
            'post' => $post
        ]);
    }

    public function updateBerita(Request $request, Post $post)
    {
        $rules = [
            'kategori_post' => 'required',
            'bidang_id' => 'required',
            'judul' => 'required',
            'slug' => 'required',
            'tampil_headline' => '',
            'image' => 'image|file|max:2048',
            'body' => ''
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        Post::where('id', $post->id)->update($validatedData);

        return redirect('/data/berita')->with('success', 'New post has been added!');

    }

    public function hapusBerita(Post $post){

        Post::destroy($post->id);

        return redirect('/data/berita')->with('success', 'New post has been added!');
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Post::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }

    public function show($slug){
        $post = Post::with(['comments', 'comments.child'])->where('slug', $slug)->first();
        return view('tampilBerita', compact('post'));
    }

    public function comment(Request $request){
        $this->validate($request, [
            'username' => 'required',
            'comment' => 'required'
        ]);
        
        Comment::create([
            'post_id' => $request->id,
            'parent_id' => $request->parent_id != '' ? $request->parent_id:NULL,
            'username' => $request->username,
            'comment' => $request->comment
        ]);
        
        return redirect()->back()->with(['success' => 'Komentar Ditambahkan']);
    }
}
