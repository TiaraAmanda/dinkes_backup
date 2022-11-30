<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bidang;
use App\Models\Profil;
use App\Models\Institusi;
use App\Models\ProfilPejabat;
use App\Models\Pejabat;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProfilPejabatController extends Controller
{
    public function ProfilPejabat(){
        return view('admin.institusi.profilpejabat');
    }

    public function Kadinkes(){
        return view('admin.institusi.profilpejabat.editkepaladinkes', [
            'halaman' => 'Profil',
            'title' => 'Profil Pejabat'
        ]);
    }

    public function editKadinkes(Request $request){

        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'pejabat_id' => 'required',
            'detail_jabatan' => 'required',
            'image' => 'image|file|max:1024',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        ProfilPejabat::create($validatedData);

        return redirect('/profilpejabat')->with('success', 'New post has been added!');

    }

    public function dataKadinkes()
    {
        $kadinkes = DB::table('profil_pejabat')->where('pejabat_id', '=', 1)->get();

        return view('admin.institusi.profilpejabat.editkepaladinkes', [
            'bidang' => Bidang::all(),
            'institusi' => Institusi::all(),
            'pejabat' => Pejabat::all(),
            'profil_pejabat' => ProfilPejabat::all()
        ])->with('kadinkes', $kadinkes);

    }

    public function updateKadinkes(Request $request, ProfilPejabat $profil_pejabat)
    {
        $rules = [
            'nama' => 'required|max:255',
            'pejabat_id' => '',
            'detail_jabatan' => '',
            'image' => 'image|file|max:1024'
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        ProfilPejabat::where('pejabat_id', '=', 1)->update($validatedData);

        return redirect('/profilpejabat')->with('success', 'New post has been added!');
    }

    public function tambahSekretariat(){

        return view('admin.institusi.profilpejabat.tambahsekretariat', [
            'bidang' => Bidang::all(),
            'institusi' => Institusi::all(),
            'pejabat' => Pejabat::all(),
            'profil_pejabat' => ProfilPejabat::all()
        ]);
    }

    public function editSekretariat(Request $request){

        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'bidang_id' => '',
            'pejabat_id' => 'required',
            'detail_jabatan' => 'required',
            'image' => 'image|file|max:2048'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        ProfilPejabat::create($validatedData);

        return redirect('/profilpejabat')->with('success', 'New post has been added!');

    }

    public function dataSekretariat()
    {
        $sekretariat = DB::table('profil_pejabat')->where('pejabat_id', '=', 2)->get();

        return view('admin.institusi.profilpejabat.sekretariat', [
            'bidang' => Bidang::all(),
            'institusi' => Institusi::all(),
            'pejabat' => Pejabat::all(),
            'profil_pejabat' => ProfilPejabat::all()
        ])->with('sekretariat', $sekretariat);

    }

    public function updateSekretariat(Request $request, ProfilPejabat $profil_pejabat)
    {
        $rules = [
            'nama' => 'required|max:255',
            'bidang_id' => '',
            'pejabat_id' => '',
            'detail_jabatan' => '',
            'image' => 'image|file|max:1024'
        ];
        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        ProfilPejabat::where('detail_jabatan', 'like', $request->detail_jabatan )->update($validatedData);

        return redirect('/profilpejabat')->with('success', 'New post has been added!');
    }

    public function tambahBidangKesma(){

        return view('admin.institusi.profilpejabat.tambahbidangkesma', [
            'bidang' => Bidang::all(),
            'institusi' => Institusi::all(),
            'pejabat' => Pejabat::all(),
            'profil_pejabat' => ProfilPejabat::all()
        ]);
    }

    public function editBidangKesma(Request $request){

        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'bidang_id' => '',
            'pejabat_id' => 'required',
            'detail_jabatan' => 'required',
            'image' => 'image|file|max:1024'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        ProfilPejabat::create($validatedData);

        return redirect('/profilpejabat')->with('success', 'New post has been added!');

    }

    public function dataBidangKesma()
    {
        $bidangkesma = DB::table('profil_pejabat')->where('pejabat_id', '=', 3)->get();

        return view('admin.institusi.profilpejabat.bidangkesma', [
            'bidang' => Bidang::all(),
            'institusi' => Institusi::all(),
            'pejabat' => Pejabat::all(),
            'profil_pejabat' => ProfilPejabat::all()
        ])->with('bidangkesma', $bidangkesma);

    }

    public function updateBidangKesma(Request $request, ProfilPejabat $profil_pejabat)
    {
        $rules = [
            'nama' => 'required|max:255',
            'bidang_id' => '',
            'pejabat_id' => '',
            'detail_jabatan' => '',
            'image' => 'image|file|max:1024'
        ];
        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        ProfilPejabat::where('detail_jabatan', 'like', $request->detail_jabatan )->update($validatedData);

        return redirect('/profilpejabat')->with('success', 'New post has been added!');
    }

    public function tambahBidangPPK(){

        return view('admin.institusi.profilpejabat.tambahbidangppk', [
            'bidang' => Bidang::all(),
            'institusi' => Institusi::all(),
            'pejabat' => Pejabat::all(),
            'profil_pejabat' => ProfilPejabat::all()
        ]);
    }

    public function editBidangPPK(Request $request){

        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'bidang_id' => '',
            'pejabat_id' => 'required',
            'detail_jabatan' => 'required',
            'image' => 'image|file|max:1024'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        ProfilPejabat::create($validatedData);

        return redirect('/profilpejabat')->with('success', 'New post has been added!');

    }

    public function dataBidangPPK()
    {
        $bidangppk = DB::table('profil_pejabat')->where('pejabat_id', '=', 4)->get();

        return view('admin.institusi.profilpejabat.bidangppk', [
            'bidang' => Bidang::all(),
            'institusi' => Institusi::all(),
            'pejabat' => Pejabat::all(),
            'profil_pejabat' => ProfilPejabat::all()
        ])->with('bidangppk', $bidangppk);

    }

    public function updateBidangPPK(Request $request, ProfilPejabat $profil_pejabat)
    {
        $rules = [
            'nama' => 'required|max:255',
            'bidang_id' => '',
            'pejabat_id' => '',
            'detail_jabatan' => '',
            'image' => 'image|file|max:1024'
        ];
        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        ProfilPejabat::where('detail_jabatan', 'like', $request->detail_jabatan )->update($validatedData);

        return redirect('/profilpejabat')->with('success', 'New post has been added!');
    }

    public function tambahBidangPK(){

        return view('admin.institusi.profilpejabat.tambahbidangpk', [
            'bidang' => Bidang::all(),
            'institusi' => Institusi::all(),
            'pejabat' => Pejabat::all(),
            'profil_pejabat' => ProfilPejabat::all()
        ]);
    }

    public function editBidangPK(Request $request){

        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'bidang_id' => '',
            'pejabat_id' => 'required',
            'detail_jabatan' => 'required',
            'image' => 'image|file|max:1024'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        ProfilPejabat::create($validatedData);

        return redirect('/profilpejabat')->with('success', 'New post has been added!');

    }

    public function dataBidangPK()
    {
        $bidangpk = DB::table('profil_pejabat')->where('pejabat_id', '=', 5)->get();

        return view('admin.institusi.profilpejabat.bidangpk', [
            'bidang' => Bidang::all(),
            'institusi' => Institusi::all(),
            'pejabat' => Pejabat::all(),
            'profil_pejabat' => ProfilPejabat::all()
        ])->with('bidangpk', $bidangpk);

    }

    public function updateBidangPK(Request $request, ProfilPejabat $profil_pejabat)
    {
        $rules = [
            'nama' => 'required|max:255',
            'bidang_id' => '',
            'pejabat_id' => '',
            'detail_jabatan' => '',
            'image' => 'image|file|max:1024'
        ];
        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        ProfilPejabat::where('detail_jabatan', 'like', $request->detail_jabatan )->update($validatedData);

        return redirect('/profilpejabat')->with('success', 'New post has been added!');
    }

    public function tambahBidangSDK(){

        return view('admin.institusi.profilpejabat.tambahbidangsdk', [
            'bidang' => Bidang::all(),
            'institusi' => Institusi::all(),
            'pejabat' => Pejabat::all(),
            'profil_pejabat' => ProfilPejabat::all()
        ]);
    }

    public function editBidangSDK(Request $request){

        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'bidang_id' => '',
            'pejabat_id' => 'required',
            'detail_jabatan' => 'required',
            'image' => 'image|file|max:1024'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        ProfilPejabat::create($validatedData);

        return redirect('/profilpejabat')->with('success', 'New post has been added!');

    }

    public function dataBidangSDK()
    {
        $bidangsdk = DB::table('profil_pejabat')->where('pejabat_id', '=', 6)->get();

        return view('admin.institusi.profilpejabat.bidangsdk', [
            'bidang' => Bidang::all(),
            'institusi' => Institusi::all(),
            'pejabat' => Pejabat::all(),
            'profil_pejabat' => ProfilPejabat::all()
        ])->with('bidangsdk', $bidangsdk);

    }

    public function updateBidangSDK(Request $request, ProfilPejabat $profil_pejabat)
    {
        $rules = [
            'nama' => 'required|max:255',
            'bidang_id' => '',
            'pejabat_id' => '',
            'detail_jabatan' => '',
            'image' => 'image|file|max:1024'
        ];
        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        ProfilPejabat::where('detail_jabatan', 'like', $request->detail_jabatan )->update($validatedData);

        return redirect('/profilpejabat')->with('success', 'New post has been added!');
    }

    public function profilpejabatview(){
        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();

        $kadinkes = DB::table('profil_pejabat')->where('pejabat_id', '=', 1)->get();
        $sekretariat = DB::table('profil_pejabat')->where('pejabat_id', '=', 2)->get();
        $bidkesma = DB::table('profil_pejabat')->where('pejabat_id', '=', 3)->get();
        $bppp = DB::table('profil_pejabat')->where('pejabat_id', '=', 4)->get();
        $bpk = DB::table('profil_pejabat')->where('pejabat_id', '=', 5)->get();
        $bsdk = DB::table('profil_pejabat')->where('pejabat_id', '=', 6)->get();


        return view('profil.profilpejabat', [
            'halaman' => 'Profil',
            'title' => 'Profil Pejabat'
        ])->with('kadinkes', $kadinkes)
        ->with('sekretariat', $sekretariat)
        ->with('bidkesma', $bidkesma)
        ->with('bppp', $bppp)
        ->with('bpk', $bpk)
        ->with('bsdk', $bsdk)
        ->with('kabarsidebar', $kabarsidebar)->with('agenda', $agenda);
    }

}
