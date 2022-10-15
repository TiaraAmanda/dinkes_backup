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


class NavController extends Controller
{
    public function kontak(){
        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();

        return view('kontak', [
            'halaman' => 'Profil',
            'title' => 'Kontak',
        ])->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);
    }

    public function faq(){
        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();

        return view('faq', [
            'halaman' => 'Profil',
            'title' => 'FAQ',
        ])->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);
    }

    public function sitemap(){
        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();

        return view('sitemap', [
            'halaman' => 'Profil',
            'title' => 'Sitemap',
        ])->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);
    }

    public function pelayanan(){
        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();

        return view('pelayanan', [
            'halaman' => 'Profil',
            'title' => 'Pelayanan',
        ])->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);
    }
}
