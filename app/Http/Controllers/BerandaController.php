<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bidang;
use App\Models\Profil;
use App\Models\Ppid;
use App\Models\Institusi;
use App\Models\Post;
use App\Models\PublicCorner;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Pagination\LengthAwarePaginator;

class BerandaController extends Controller
{
    public function visimisi(){

        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();

        return view('visimisi', [
            'halaman' => 'Profil',
            'title' => 'Visi Misi'
        ])->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);
    }

    public function beranda(Post $post){

        $berita = DB::table('post')
        ->where('kategori_post', 'like', 'berita')
        ->join('bidang', 'bidang.id', '=', 'post.bidang_id')
        ->select('bidang.nama_bidang as nama_bidang', 'post.judul', 'post.image', 'post.kategori_post', 'post.body', 'post.slug', 'post.bidang_id')
        ->take(3)
        ->latest('post.created_at')
        ->get();

        $artikel = DB::table('post')
        ->where('kategori_post', 'like', 'artikel')
        ->join('bidang', 'bidang.id', '=', 'post.bidang_id')
        ->select('bidang.nama_bidang as nama_bidang', 'post.judul', 'post.image', 'post.kategori_post', 'post.body', 'post.slug', 'post.bidang_id')
        ->take(3)
        ->latest('post.created_at')
        ->get();

        $slider = DB::table('post')->where('tampil_headline', '=', 1)
        ->join('bidang', 'bidang.id', '=', 'post.bidang_id')
        ->select('bidang.nama_bidang as nama_bidang', 'post.judul', 'post.image', 'post.kategori_post', 'post.body', 'post.slug', 'post.bidang_id')

        ->take(3)->get();

        $publiccorner = DB::table('public_corner')->where('tampil', '=', 1)->take(2)->get();

        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();

        return view('beranda', [
            'post' => $post,
            'bidang' => Bidang::all()
        ])->with('publiccorner', $publiccorner)
        ->with('slider', $slider)
        ->with('berita', $berita)
        ->with('artikel', $artikel)
        ->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);


    }

    public function berita(){

        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();
        $berita = DB::table('post')->where('kategori_post', 'like', 'berita')->paginate(6)->withQueryString();

        return view('berita.index', [
            'title' => 'Berita',
            'halaman' => 'Postingan',
            'berita' => Post::all()
        ])->with('berita', $berita)
        ->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);
    }

    public function artikel(){

        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();
        $artikel = DB::table('post')->where('kategori_post', 'like', 'artikel')->paginate(6)->withQueryString();

        return view('berita.indexartikel', [
            'title' => 'Artikel',
            'halaman' => 'Postingan',
            'artikel' => Post::all()
        ])->with('artikel', $artikel)
        ->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);
    }

    public function tampilBerita(Post $post){

        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();

        return view('berita.tampil', [
            'post' => $post,
            'halaman' => 'Postingan',
            'title' => 'Halaman Postingan'
        ])->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);
    }
    public function tampilArtikel(Post $post){

        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();

        return view('berita.tampilartikel', [
            'post' => $post,
            'halaman' => 'Artikel',
            'title' => 'Artikel Terkini'
        ])->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);
    }


    public function slider(Post $post){
        $slider = DB::table('post')->where('tampil_headline', '=', 1)->take(2)->get();

        return view('partials.slider')->with('slider', $slider);
    }


    public function tampilSekretariat(Post $post){

        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();

        $sekretariat = DB::table('post')
        ->where('bidang_id', '=', 1)
        ->join('bidang', 'bidang.id', '=', 'post.bidang_id')
        ->select('bidang.nama_bidang as nama_bidang', 'post.judul', 'post.image', 'post.kategori_post', 'post.body', 'post.slug', 'post.bidang_id', 'post.updated_at')
        ->orderBy('post.created_at', 'DESC')
        ->paginate(6)
        ->withQueryString();

        return view('berita.sekretariat', [
            'post' => $post,
            'bidang' => Bidang::all(),
            'title' => 'Sekretariat',
            'halaman' => 'Bidang'
        ])->with('sekretariat', $sekretariat)
        ->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);
    }


    public function tampilKesma(){

        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();

        $kesma = DB::table('post')
        ->where('bidang_id', '=', 2)
        ->join('bidang', 'bidang.id', '=', 'post.bidang_id')
        ->select('bidang.nama_bidang as nama_bidang', 'post.judul', 'post.image', 'post.kategori_post', 'post.body', 'post.slug', 'post.bidang_id', 'post.updated_at')
        ->orderBy('post.created_at', 'DESC')
        ->paginate(6)
        ->withQueryString();

        return view('berita.kesma', [
            'post' => Post::all(),
            'bidang' => Bidang::all(),
            'title' => 'Kesehatan Masyarakat',
            'halaman' => 'Bidang'
        ])->with('kesma', $kesma)
        ->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);
    }

    public function tampilPencegahan(){
        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();

        $pencegahan = DB::table('post')
        ->where('bidang_id', '=', 3)
        ->join('bidang', 'bidang.id', '=', 'post.bidang_id')
        ->select('bidang.nama_bidang as nama_bidang', 'post.judul', 'post.image', 'post.kategori_post', 'post.body', 'post.slug', 'post.bidang_id', 'post.updated_at')
        ->orderBy('post.created_at', 'DESC')
        ->paginate(6)
        ->withQueryString();

        return view('berita.pencegahan', [
            'post' => Post::all(),
            'bidang' => Bidang::all(),
            'title' => 'Pencegahan Penyakit',
            'halaman' => 'Bidang'
        ])->with('pencegahan', $pencegahan)
        ->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);
    }
    public function tampilPelayanan(){
        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();

        $pelayanan = DB::table('post')
        ->where('bidang_id', '=', 3)
        ->join('bidang', 'bidang.id', '=', 'post.bidang_id')
        ->select('bidang.nama_bidang as nama_bidang', 'post.judul', 'post.image', 'post.kategori_post', 'post.body', 'post.slug', 'post.bidang_id', 'post.updated_at')
        ->orderBy('post.created_at', 'DESC')
        ->paginate(6)
        ->withQueryString();

        return view('berita.pelayanan', [
            'post' => Post::all(),
            'bidang' => Bidang::all(),
            'title' => 'Pelayanan Kesehatan',
            'halaman' => 'Bidang'
        ])->with('pelayanan', $pelayanan)
        ->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);
    }
    public function tampilSumberDaya(){
        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();

        $sumberdaya = DB::table('post')
        ->where('bidang_id', '=', 3)
        ->join('bidang', 'bidang.id', '=', 'post.bidang_id')
        ->select('bidang.nama_bidang as nama_bidang', 'post.judul', 'post.image', 'post.kategori_post', 'post.body', 'post.slug', 'post.bidang_id', 'post.updated_at')
        ->orderBy('post.created_at', 'DESC')
        ->paginate(6)
        ->withQueryString();

        return view('berita.sumberdaya', [
            'post' => Post::all(),
            'bidang' => Bidang::all(),
            'title' => 'Sumber Daya Kesehatan',
            'halaman' => 'Bidang'
        ])->with('sumberdaya', $sumberdaya)
        ->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);
    }

    public function tampilKategori(Post $post){
        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();

        $bidang = DB::table('bidang')
        ->where('id', '=', $post->bidang_id)
        ->get();

        return view('berita.tampilkategori', [
            'halaman' => 'Kategori',
            'title' => 'Kategori Postingan',
            'bidang' => Bidang::all(),
            'posts' => Post::where('bidang_id', '=', $post->bidang_id)->paginate(6)
            // 'bidang' => Bidang::all()
        ])->with('bidang', $bidang)
        ->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);
    }

    public function sidebar(){
        $kabarsidebar = DB::table('post')->latest()->get();

        return view('partials.sidebar', compact('kabarsidebar'));
    }

    public function upt(){

        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();
        return view('upt', [
            'title' => 'UPT Dinas Kesehatan',
            'halaman' => 'Instansi'
        ])        ->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);
    }
    public function dinkeskabkota(){

        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();

        $web = DB::table('web_dinkes')->paginate(10)->withQueryString();
        return view('dinkes-kabkota', [
            'title' => 'Dinas Kesehatan Kabupaten Kota',
            'halaman' => 'Instansi'
        ])        ->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda)
        ->with('web', $web);
    }

}
