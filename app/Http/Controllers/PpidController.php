<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bidang;
use App\Models\Profil;
use App\Models\Ppid;
use App\Models\Institusi;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PpidController extends Controller
{
    public function sejarah(){

        $sejarah = DB::table('ppid')->where('kategori', 'like', 'sejarah')->get();

        return view('admin.ppid.sejarah', [
            'halaman' => 'PPID',
            'title' => 'Sejarah',
            'bidang' => Bidang::all(),
            'profil' => Profil::all(),
            'ppid' => Ppid::all()
        ])->with('sejarah', $sejarah);

    }

    public function halamanSejarah(Request $request){

        $validatedData = $request->validate([
            'kategori' => '',
            'judul' => 'required|max:255',
            'bidang_id' => 'required',
            'image' => 'image|file|max:255',
            'slug' => 'required|unique:ppid',
            'body' => ''
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Ppid::create($validatedData);

        return redirect('/dashboard')->with('success', 'New post has been added!');

    }

    public function editSejarah()
    {
        $sejarah = DB::table('ppid')->where('kategori', 'like', 'sejarah')->get();

        return view('admin.ppid.sejarah', [
            'bidang' => Bidang::all(),
            'profil' => Profil::all(),
            'ppid' => Ppid::all()
        ])->with('sejarah', $sejarah);

    }

    public function updateSejarah(Request $request, Ppid $ppid)
    {
        $rules = [
            'judul' => 'required|max:255',
            'bidang_id' => 'required',
            'image' => 'image|file|max:255',
            'kategori' => '',
            'body' => ''
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Ppid::where('kategori', 'like', 'sejarah')->update($validatedData);

        return redirect('/dashboard')->with('success', 'New post has been added!');
        }


    public function stpk(){

        $stpk = DB::table('ppid')->where('kategori', 'like', 'struktur tupoksi')->get();

        return view('admin.ppid.strukturtupoksi', [
            'bidang' => Bidang::all(),
            'ppid' => Ppid::all()
        ])->with('stpk', $stpk);
    }

    public function tambahStpk(){
        return view('admin.ppid.tambahstrukturtupoksi', [
            'bidang' => Bidang::all(),
            'ppid' => Ppid::all()
        ]);
    }

    public function createStpk(Request $request){

        $validatedData = $request->validate([
            'kategori' => '',
            'judul' => 'required|max:255',
            'bidang_id' => 'required',
            'image' => 'image|file|max:255',
            'slug' => 'required|unique:ppid',
            'body' => ''
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Ppid::create($validatedData);

        return redirect('/dashboard')->with('success', 'New post has been added!');

    }

    public function hapusStpk(Ppid $ppid){

        Ppid::destroy($ppid->id);
        return redirect('/dashboard')->with('success', 'New post has been added!');
    }

    public function editStpk(Ppid $ppid){

        return view('admin.ppid.editstrukturtupoksi', [
            'ppid' => $ppid,
            'bidang' => Bidang::all()
        ]);
    }

    public function updateStpk(Request $request, Ppid $ppid)
    {
        $rules = [
            'kategori' => '',
            'judul' => 'required|max:255',
            'bidang_id' => 'required',
            'body' => ''

        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Ppid::where('id', $ppid->id )->update($validatedData);
        return redirect('/dashboard')->with('success', 'New post has been added!');
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Ppid::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }

    public function tcp(){

        $tcp = DB::table('ppid')->where('kategori', 'like', 'tata cara permohonan')->get();

        return view('admin.ppid.tcp', [
            'bidang' => Bidang::all(),
            'ppid' => Ppid::all()
        ])->with('tcp', $tcp);
    }

    public function tambahTcp(){
        return view('admin.ppid.tambahtcp', [
            'bidang' => Bidang::all(),
            'ppid' => Ppid::all()
        ]);
    }

    public function createTcp(Request $request){

        $validatedData = $request->validate([
            'kategori' => '',
            'judul' => 'required|max:255',
            'bidang_id' => 'required',
            'image' => 'image|file|max:255',
            'slug' => 'required|unique:ppid',
            'body' => ''
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Ppid::create($validatedData);

        return redirect('/dashboard')->with('success', 'New post has been added!');

    }

    public function hapusTcp(Ppid $ppid){

        Ppid::destroy($ppid->id);
        return redirect('/dashboard')->with('success', 'New post has been added!');
    }

    public function editTcp(Ppid $ppid){

        return view('admin.ppid.edittcp', [
            'ppid' => $ppid,
            'bidang' => Bidang::all()
        ]);
    }

    public function updateTcp(Request $request, Ppid $ppid)
    {
        $rules = [
            'kategori' => '',
            'judul' => 'required|max:255',
            'bidang_id' => 'required',
            'body' => ''

        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Ppid::where('id', $ppid->id )->update($validatedData);
        return redirect('/dashboard')->with('success', 'New post has been added!');
    }

    public function dip(){

        $dip = DB::table('ppid')->where('kategori', 'like', 'daftar informasi publik')->get();

        return view('admin.ppid.dip', [
            'bidang' => Bidang::all(),
            'ppid' => Ppid::all()
        ])->with('dip', $dip);
    }

    public function tambahDip(){
        return view('admin.ppid.tambahdip', [
            'bidang' => Bidang::all(),
            'ppid' => Ppid::all()
        ]);
    }

    public function createDip(Request $request){

        $validatedData = $request->validate([
            'kategori' => '',
            'judul' => 'required|max:255',
            'bidang_id' => 'required',
            'image' => 'image|file|max:255',
            'slug' => 'required|unique:ppid',
            'body' => ''
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Ppid::create($validatedData);

        return redirect('/dashboard')->with('success', 'New post has been added!');

    }

    public function hapusDip(Ppid $ppid){

        Ppid::destroy($ppid->id);
        return redirect('/dashboard')->with('success', 'New post has been added!');
    }

    public function editDip(Ppid $ppid){

        return view('admin.ppid.editdip', [
            'ppid' => $ppid,
            'bidang' => Bidang::all()
        ]);
    }

    public function updateDip(Request $request, Ppid $ppid)
    {
        $rules = [
            'kategori' => '',
            'judul' => 'required|max:255',
            'bidang_id' => 'required',
            'body' => ''
        ];

        $validatedData = $request->validate($rules);

        // dd($validatedData);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Ppid::where('id', $ppid->id )->update($validatedData);
        return redirect('/dashboard')->with('success', 'New post has been added!');
    }

}
