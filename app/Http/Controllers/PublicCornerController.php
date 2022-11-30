<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bidang;
use App\Models\Profil;
use App\Models\Ppid;
use App\Models\Institusi;
use App\Models\PublicCorner;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PublicCornerController extends Controller
{

    public function kirimpertanyaan(Request $request){

        $validatedData = $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'email' => '',
            'notelp' => 'required',
            'alamat' => '',
            'jenis_kelamin' => 'required',
            'pekerjaan' => '',
            'pertanyaan' => 'required'
        ]);

        PublicCorner::create($validatedData);

        return redirect('/public-corner')->with('success', 'Berhasil Mengirimkan Pertanyaan');
    }

    public function publiccorner(){

        return view('admin.publiccorner.index', [
            'public_corner' => PublicCorner::all()
        ]);
    }


    public function jawabPertanyaan(PublicCorner $public_corner){
        return view('admin.publiccorner.edit', [
            'public_corner' => $public_corner
        ]);
    }

    public function updateJawaban(Request $request, PublicCorner $public_corner)
    {
        $rules = [
            'nama' => '',
            'nik' => '',
            'email' => '',
            'notelp' => '',
            'alamat' => '',
            'jenis_kelamin' => '',
            'pekerjaan' => '',
            'pertanyaan' => '',
            'jawaban' => 'required',
            'tampil' => 'required'
        ];

        $validatedData = $request->validate($rules);

        PublicCorner::where('id', $public_corner->id )->update($validatedData);

        return redirect('/admin/public-corner')->with('success', 'New post has been added!');
    }

    public function tampil(PublicCorner $public_corner){

        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();
        return view('publiccorner.detail', [
            'halaman' => 'Public Corner',
            'title' => 'Detail Pertanyaan',
            'public_corner' => $public_corner
        ])->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);
    }

    public function semua(){

        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();
        $publiccorner = DB::table('public_corner')->where('tampil', '=', 1)->get();

        return view('publiccorner.all',[
            'halaman' => 'Public Corner',
            'title' => 'Semua Pertanyaan',
            'publiccorner' => PublicCorner::all()
        ])->with('publiccorner', $publiccorner)
        ->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);

    }

    public function publiccornerfrontend(){
        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();

        return view('publiccorner.index',[
            'halaman' => 'Halaman Public Corner',
            'title' => 'Public Corner'
        ])->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);
    }
}
