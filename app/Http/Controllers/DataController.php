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
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class DataController extends Controller
{
    public function spm(){

        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();
        $namakabkota = DB::table('kabkota')->where('kd_kabkota', '=', 'kd_kabkota')->get();

        return view('admin.data.spm', [
            'halaman' => 'Data',
            'tittle' => 'Data SPM',
            'kabkota' => Kabkota::all(),
            'spm' => Spm::all()
        ])->with('namakabkota', $namakabkota)
        ->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);
    }

    public function tambahSpm(){
        $namakabkota = DB::table('kabkota')->where('kd_kabkota', '=', 'kd_kabkota')->get();

        return view('admin.data.tambahdataspm', [
            'halaman' => 'Data',
            'tittle' => 'Data SPM',
            'kabkota' => Kabkota::all(),
            'spm' => Spm::all()
        ])->with('namakabkota', $namakabkota);
    }

    public function createSpm(Request $request){
        $request->validate([
            'file_spm' => 'required|mimes:doc,docx,xls,xlsx,pdf'
        ]);

        $validatedData = $request->validate([
            'kd_kabkota' => 'required',
            'nama_file' => 'required',
            'file_spm' => 'required|mimes:doc,docx,xls,xlsx,pdf',
            'tahun' => 'required',
            'tribulan' => 'required'
        ]);

        if ($request->file('file_spm')) {
            $validatedData['file_spm'] = $request->file('file_spm')->store('post-document');
        }

        Spm::create($validatedData);

        return redirect('/admin/bank-data-spm')->with('success', 'New post has been added!');
    }

    public function hapusSpm(Spm $spm){

        Spm::destroy($spm->id);
        return redirect('/admin/bank-data-spm')->with('success', 'New post has been added!');
    }


    public function dp(){
        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();
        $data = DB::table('data')->where('kategori_data', 'like', 'dokumen-publikasi')->get();

        return view('admin.data.dp', [
            'halaman' => 'Data',
            'tittle' => 'Data Dokumen Publikasi',
            'data' => Data::all()
        ])->with('data', $data)
        ->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);
    }

    public function tambahDp(){
        $data = DB::table('data')->where('kategori_data', 'like', 'dokumen-publikasi')->get();

        return view('admin.data.tambahdatadp', [
            'halaman' => 'Data',
            'tittle' => 'Data Dokumen Publikasi',
            'data' => Data::all()
        ])->with('data', $data);
    }

    public function createDp(Request $request){
        $request->validate([
            'data_file' => 'required|mimes:doc,docx,xls,xlsx,pdf'
        ]);

        $validatedData = $request->validate([
            'nama_file' => 'required',
            'data_file' => 'required|mimes:doc,docx,xls,xlsx,pdf',
            'kategori_data' => 'required',
        ]);

        if ($request->file('data_file')) {
            $validatedData['data_file'] = $request->file('data_file')->store('post-document');
        }

        Data::create($validatedData);

        return redirect('/datainformasi/dokumen-publikasi')->with('success', 'New post has been added!');
    }

    public function hapusDp(Data $data){

        Data::destroy($data->id);

        return redirect('/datainformasi/dokumen-publikasi')->with('success', 'New post has been added!');
    }


    public function pa(){
        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();

        $data = DB::table('data')->where('kategori_data', 'like', 'peraturan-aturan')->get();

        return view('admin.data.pa', [
            'halaman' => 'Data',
            'tittle' => 'Data Peraturan Aturan',
            'data' => Data::all()
        ])->with('data', $data)
        ->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);
    }

    public function tambahPa(){
        $data = DB::table('data')->where('kategori_data', 'like', 'peraturan-aturan')->get();

        return view('admin.data.tambahdatapa', [
            'halaman' => 'Data',
            'tittle' => 'Data Peraturan Aturan',
            'data' => Data::all()
        ])->with('data', $data);
    }

    public function createPa(Request $request){
        $request->validate([
            'data_file' => 'required|mimes:doc,docx,xls,xlsx,pdf'
        ]);

        $validatedData = $request->validate([
            'nama_file' => 'required',
            'data_file' => 'required|mimes:doc,docx,xls,xlsx,pdf',
            'kategori_data' => 'required',
        ]);

        if ($request->file('data_file')) {
            $validatedData['data_file'] = $request->file('data_file')->store('post-document');
        }

        Data::create($validatedData);

        return redirect('/datainformasi/peraturan-aturan')->with('success', 'New post has been added!');
    }

    public function hapusPa(Data $data){

        Data::destroy($data->id);

        return redirect('/datainformasi/peraturan-aturan')->with('success', 'New post has been added!');
    }

    public function lk(){

        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();
        $data = DB::table('data')->where('kategori_data', 'like', 'laporan-kinerja')->get();

        return view('admin.data.lk', [
            'halaman' => 'Data',
            'tittle' => 'Data Laporan Kinerja',
            'data' => Data::all()
        ])->with('data', $data)
        ->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);
    }

    public function tambahLk(){
        $data = DB::table('data')->where('kategori_data', 'like', 'laporan-kinerja')->get();

        return view('admin.data.tambahdatalk', [
            'halaman' => 'Data',
            'tittle' => 'Data Laporan Kinerja',
            'data' => Data::all()
        ])->with('data', $data);
    }

    public function createLk(Request $request){
        $request->validate([
            'data_file' => 'required|mimes:doc,docx,xls,xlsx,pdf'
        ]);

        $validatedData = $request->validate([
            'nama_file' => 'required',
            'data_file' => 'required|mimes:doc,docx,xls,xlsx,pdf',
            'kategori_data' => 'required',
        ]);

        if ($request->file('data_file')) {
            $validatedData['data_file'] = $request->file('data_file')->store('post-document');
        }

        Data::create($validatedData);

        return redirect('/datainformasi/laporan-kinerja')->with('success', 'New post has been added!');
    }

    public function hapusLk(Data $data){

        Data::destroy($data->id);

        return redirect('/datainformasi/laporan-kinerja')->with('success', 'New post has been added!');
    }

    public function sbh(){

        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();

        $data = DB::table('data')->where('kategori_data', 'like', 'saka-bakti-husada')->get();

        return view('admin.data.sbh', [
            'halaman' => 'Data',
            'tittle' => 'Data Saka Bakti Husada',
            'data' => Data::all()
        ])->with('data', $data)
        ->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);
    }

    public function tambahSbh(){
        $data = DB::table('data')->where('kategori_data', 'like', 'saka-bakti-husada')->get();

        return view('admin.data.tambahdatasbh', [
            'halaman' => 'Data',
            'tittle' => 'Data Saka Bakti Husada',
            'data' => Data::all()
        ])->with('data', $data);
    }

    public function createSbh(Request $request){

        $validatedData = $request->validate([
            'nama_file' => 'required',
            'data_file' => 'required|mimes:doc,docx,xls,xlsx,pdf,png,jpg,jpeg',
            'kategori_data' => 'required',
        ]);

        if ($request->file('data_file')) {
            $validatedData['data_file'] = $request->file('data_file')->store('post-saka-bakti');
        }

        Data::create($validatedData);

        return redirect('/datainformasi/saka-bakti-husada')->with('success', 'New post has been added!');
    }

    public function hapusSbh(Data $data){

        Data::destroy($data->id);

        return redirect('/datainformasi/saka-bakti-husada')->with('success', 'New post has been added!');
    }


    public function agenda(){

        return view('admin.data.agenda', [
            'halaman' => 'Data',
            'tittle' => 'Agenda',
            'agenda' => Agenda::all()
        ]);
    }

    public function tambahAgenda(){

        return view('admin.data.tambahagenda', [
            'halaman' => 'Data',
            'tittle' => 'Agenda',
            'agenda' => Agenda::all()
        ]);
    }

    public function createAgenda(Request $request){

        $validatedData = $request->validate([
            'tanggal_agenda' => 'required',
            'nama_agenda' => 'required'
        ]);

        Agenda::create($validatedData);

        return redirect('/data/agenda')->with('success', 'New post has been added!');
    }

    public function hapusAgenda(Agenda $agenda){

        Agenda::destroy($agenda->id);

        return redirect('/data/agenda')->with('success', 'New post has been added!');
    }

    public function pdi(){

        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();
        $pdi = DB::table('data')->where('kategori_data', 'like', 'dokumen-publikasi')->get();

        return view('data.publikasi', [
            'halaman' => 'Data',
            'title' => 'Publikasi dan Informasi'
        ])->with('pdi', $pdi)
        ->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);
    }

    public function peraturanaturan(){

        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();
        $pa = DB::table('data')->where('kategori_data', 'like', 'peraturan-aturan')->get();

        return view('data.peraturan', [
            'halaman' => 'Data',
            'title' => 'Peraturan dan Aturan'
        ])->with('pa', $pa)
        ->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);
    }

    public function barangjasa(){

        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();
        return view('data.barangjasa', [
            'halaman' => 'Data',
            'title' => 'Pengadaan Barang dan Jasa'
        ])->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);
    }

    public function perencanaanevaluasi(){

        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();
        return view('data.perencanaan', [
            'halaman' => 'Data',
            'title' => 'Perencanaan dan Evaluasi'
        ])->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);
    }
    public function callcenter(){

        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();
        return view('data.callcenter', [
            'halaman' => 'Data',
            'title' => 'Call Center COVID-19'
        ])->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);
    }
}
