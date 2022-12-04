<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bidang;
use App\Models\Profil;
use App\Models\Ppid;
use App\Models\Institusi;
use App\Models\LaporanMasyarakat;
use App\Models\SurveyKepuasan;
use App\Models\SurveyKepuasanWeb;
use App\Models\SurveyPuskesmas;
use App\Models\SurveyKebutuhan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class InstitusiController extends Controller
{

    public function institusi(){
        return view('admin.institusi.intitusi');
    }

    public function visimisi(){

        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();
        $institusi_visimisi = DB::table('institusi')->where('profil_id', '=', 1)->get();

        return view('profil.visimisi', [
            'halaman' => 'Profil',
            'title' => 'Visi Misi',
            'bidang' => Bidang::all(),
            'profil' => Profil::all(),
            'institusi' => Institusi::all()
        ])->with('institusi_visimisi', $institusi_visimisi)
        ->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);

    }

    public function motto(){
        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();
        $institusi_motto = DB::table('institusi')->where('profil_id', '=', 3)->get();

        return view('profil.motto', [
            'halaman' => 'Profil',
            'title' => 'Motto',
            'bidang' => Bidang::all(),
            'profil' => Profil::all(),
            'institusi' => Institusi::all()
        ])->with('institusi_motto', $institusi_motto)
        ->with('kabarsidebar', $kabarsidebar)->with('agenda', $agenda);

    }
    public function tujuan(){
        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();
        $institusi_tujuan = DB::table('institusi')->where('profil_id', '=', 2)->get();

        return view('profil.tujuan', [
            'halaman' => 'Profil',
            'title' => 'Tujuan',
            'bidang' => Bidang::all(),
            'profil' => Profil::all(),
            'institusi' => Institusi::all()
        ])->with('institusi_tujuan', $institusi_tujuan)
        ->with('institusi_tujuan', $institusi_tujuan)
        ->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);

    }
    public function kebijakan(){

        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();
        $institusi_kebijakan = DB::table('institusi')->where('profil_id', '=', 4)->get();

        return view('profil.kebijakan', [
            'halaman' => 'Profil',
            'title' => 'Kebijakan',
            'bidang' => Bidang::all(),
            'profil' => Profil::all(),
            'institusi' => Institusi::all()
        ])->with('institusi_kebijakan', $institusi_kebijakan)
        ->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);

    }
    public function strukturorganisasi(){
        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();
        $institusi_struktur_organisasi = DB::table('institusi')->where('profil_id', '=', 5)->get();

        return view('profil.strukturorganisasi', [
            'halaman' => 'Profil',
            'title' => 'Struktur Organisasi',
            'bidang' => Bidang::all(),
            'profil' => Profil::all(),
            'institusi' => Institusi::all()
        ])->with('institusi_struktur_organisasi', $institusi_struktur_organisasi)
        ->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);

    }

    public function halamanVisimisi(Request $request){

        dd($request);
        $validatedData = $request->validate([
            'profil_id' => 'required',
            'judul' => 'required|max:255',
            'bidang_id' => 'required',
            'image' => 'image|file|dimensions:min_width=100,min_height=200',
            'body' => ''
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Institusi::create($validatedData);

        return redirect('/institusi')->with('success', 'New post has been added!');

    }

    public function createVisimisi(Request $request){

        $validatedData = $request->validate([
            'profil_id' => 'required',
            'judul' => 'required|max:255',
            'bidang_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => ''
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Institusi::create($validatedData);

        return redirect('/institusi')->with('success', 'New post has been added!');

    }

    public function editVisimisi()
    {
        $institusi_visimisi = DB::table('institusi')->where('profil_id', '=', 1)->get();

        return view('admin.institusi.editvisimisi', [
            'bidang' => Bidang::all(),
            'profil' => Profil::all(),
            'institusi' => Institusi::all()
        ])->with('institusi_visimisi', $institusi_visimisi);

    }

    public function updateVisimisi(Request $request, Institusi $institusi)
    {
        $rules = [
            'judul' => 'required|max:255',
            'bidang_id' => 'required',
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

        $validatedData['user_id'] = auth()->user()->id;

        Institusi::where('profil_id', '=', 1)->update($validatedData);

        return redirect('/institusi')->with('success', 'New post has been added!');
        }

    public function halamanTujuan(Request $request){

        $validatedData = $request->validate([
            'profil_id' => 'required',
            'judul' => 'required|max:255',
            'bidang_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => ''
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Institusi::create($validatedData);

        return redirect('/institusi')->with('success', 'New post has been added!');

    }

    public function editTujuan()
    {
        $institusi_tujuan = DB::table('institusi')->where('profil_id', '=', 2)->get();

        return view('admin.institusi.edittujuan', [
            'bidang' => Bidang::all(),
            'profil' => Profil::all(),
            'institusi' => Institusi::all()
        ])->with('institusi_tujuan', $institusi_tujuan);

    }

    public function updateTujuan(Request $request, Institusi $institusi){
        $rules = [
            'judul' => 'required|max:255',
            'bidang_id' => 'required',
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

        $validatedData['user_id'] = auth()->user()->id;

        Institusi::where('profil_id', '=', 2)->update($validatedData);

        return redirect('/institusi')->with('success', 'New post has been added!');

    }

    public function halamanMotto(Request $request){

        $validatedData = $request->validate([
            'profil_id' => 'required',
            'judul' => 'required|max:255',
            'bidang_id' => 'required',
            'image' => 'image',
            'body' => ''
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Institusi::create($validatedData);

        return redirect('/institusi')->with('success', 'New post has been added!');

    }

    public function editMotto()
    {
        $institusi_motto = DB::table('institusi')->where('profil_id', '=', 3)->get();

        return view('admin.institusi.editmotto', [
            'bidang' => Bidang::all(),
            'profil' => Profil::all(),
            'institusi' => Institusi::all()
        ])->with('institusi_motto', $institusi_motto);

    }

    public function updateMotto(Request $request, Institusi $institusi)
    {
        $rules = [
            'judul' => 'required|max:255',
            'bidang_id' => 'required',
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

        $validatedData['user_id'] = auth()->user()->id;

        Institusi::where('profil_id', '=', 3)->update($validatedData);

        return redirect('/institusi')->with('success', 'New post has been added!');

    }

    public function halamanKebijakan(Request $request){

        $validatedData = $request->validate([
            'profil_id' => 'required',
            'judul' => 'required|max:255',
            'bidang_id' => 'required',
            'image' => 'image|file|max:255',
            'body' => ''
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Institusi::create($validatedData);

        return redirect('/institusi')->with('success', 'New post has been added!');

    }

    public function editKebijakan()
    {
        $institusi_kebijakan = DB::table('institusi')->where('profil_id', '=', 4)->get();

        return view('admin.institusi.editkebijakan', [
            'bidang' => Bidang::all(),
            'profil' => Profil::all(),
            'institusi' => Institusi::all()
        ])->with('institusi_kebijakan', $institusi_kebijakan);

    }

    public function updateKebijakan(Request $request, Institusi $institusi)
    {
        $rules = [
            'judul' => 'required|max:255',
            'bidang_id' => 'required',
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

        $validatedData['user_id'] = auth()->user()->id;

        Institusi::where('profil_id', '=', 4)->update($validatedData);

        return redirect('/institusi')->with('success', 'New post has been added!');

    }


    public function halamanStrukturOrganisasi(Request $request){

        $validatedData = $request->validate([
            'profil_id' => 'required',
            'judul' => 'required|max:255',
            'bidang_id' => 'required',
            'image' => 'image',
            'body' => ''
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Institusi::create($validatedData);

        return redirect('/institusi')->with('success', 'New post has been added!');

    }

    public function editStrukturOrganisasi()
    {
        $institusi_struktur_organisasi = DB::table('institusi')->where('profil_id', '=', 5)->get();

        return view('admin.institusi.editstrukturorganisasi', [
            'bidang' => Bidang::all(),
            'profil' => Profil::all(),
            'institusi' => Institusi::all()
        ])->with('institusi_struktur_organisasi', $institusi_struktur_organisasi);

    }

    public function updateStrukturOrganisasi(Request $request, Institusi $institusi)
    {
        $rules = [
            'judul' => 'required|max:255',
            'bidang_id' => 'required',
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

        $validatedData['user_id'] = auth()->user()->id;

        Institusi::where('profil_id', '=', 5)->update($validatedData);

        return redirect('/institusi')->with('success', 'New post has been added!');

    }

    public function halamanMaklumat(Request $request){
        $validatedData = $request->validate([
            'profil_id' => 'required',
            'judul' => 'required|max:255',
            'bidang_id' => 'required',
            'image' => 'image|file|max:255',
            'body' => ''
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Institusi::create($validatedData);

        return redirect('/institusi')->with('success', 'New post has been added!');

    }

    public function maklumat(){
        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();
        $institusi_maklumat = DB::table('institusi')->where('profil_id', '=', 7)->get();

        return view('profil.maklumat', [
            'halaman' => 'Profil',
            'title' => 'Maklumat Pelayanan'
        ])->with('institusi_maklumat', $institusi_maklumat)
        ->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);
    }

    public function editMaklumat(){
        $institusi_maklumat = DB::table('institusi')->where('profil_id', '=', 7)->get();

        return view('admin.institusi.editmaklumat', [
            'bidang' => Bidang::all(),
            'profil' => Profil::all(),
            'institusi' => Institusi::all()
        ])->with('institusi_maklumat', $institusi_maklumat);
    }

    public function updateMaklumat(Request $request, Institusi $institusi){
        $rules = [
            'judul' => 'required|max:255',
            'bidang_id' => 'required',
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

        $validatedData['user_id'] = auth()->user()->id;

        Institusi::where('profil_id', '=', 7)->update($validatedData);

        return redirect('/institusi')->with('success', 'New post has been added!');
    }

    public function laporankontak(){

        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();

        return view('laporkankontak', [
            'halaman' => 'Profil',
            'title' => 'Kontak'
        ])->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);
    }

    public function kirimlaporan(Request $request){
        

        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'what' => 'required',
            'who' => 'required',
            'when' => 'required',
            'where' => 'required',
            'how' => 'required',
            'bukti' => 'required|mimes:doc,docx,xls,xlsx,pdf,png,jpg,jpeg',
            'informasitambahan' => ''
        ]);

        if ($request->file('bukti')) {
            $validatedData['bukti'] = $request->file('bukti')->store('post-document');
        }

        LaporanMasyarakat::create($validatedData);

        return redirect('/laporankontak')->with('success', 'Laporan Berhasil Dikirim');
    }

    public function pelaporan(){

        return view('admin.survey.pelaporan', [
            'laporan_masyarakat' => LaporanMasyarakat::all()
        ]);
    }

    public function detailpelaporan(LaporanMasyarakat $laporan_masyarakat){

        $laporan_masyarakat = DB::table('laporan_masyarakat')->where('id', $laporan_masyarakat->id)->get();
        // dd($laporan_masyarakat);
        return view('admin.survey.detailpelaporan', [
            'laporan_masyarakat' => $laporan_masyarakat
        ]);
    }

    public function strttk(){

        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();

        return view('surveykepuasan.strttk', [
            'halaman' => 'Survey Kepuasan',
            'title' => 'STRTTK'
        ])->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);
    }

    public function surveystrttk(){

        return view('admin.survey.surveystrttk', [
            'survey_kepuasan' => SurveyKepuasan::all()
        ]);
    }

    public function detailstrttk(SurveyKepuasan $survey_kepuasan){
        
        $survey_kepuasan = DB::table('survey_kepuasan')->where('id', $survey_kepuasan->id)->get();
        
        return view('admin.survey.detailstrttk', [
            'survey_kepuasan' => $survey_kepuasan
        ]);
    }

    public function kirimstrttk(Request $request){

        $validatedData = $request->validate([
            'kategori_survey' => 'required',
            'nama' => 'required',
            'umur' => 'required',
            'jenis_kelamin' => 'required',
            'pertanyaan2' => 'required',
            'pertanyaan3' => 'required',
            'pertanyaan4' => 'required',
            'pertanyaan5' => 'required',
            'pertanyaan6' => 'required',
            'pertanyaan7' => 'required',
            'pertanyaan8' => 'required',
            'pertanyaan9' => 'required',
            'pertanyaan10' => 'required',
            'kritiksaran' => '',
        ]);

        SurveyKepuasan::create($validatedData);
        return redirect('/strttk')->with('success', 'Laporan Berhasil Dikirim');
    }

    public function puskesmas(){

        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();
        return view('surveykepuasan.puskesmas', [
            'halaman' => 'Survey Kepuasan',
            'title' => 'Rekomendasi Puskesmas'
        ])        ->with('kabarsidebar', $kabarsidebar)
        ->with('agenda', $agenda);
    }

    public function surveypuskesmas(){
        return view('admin.survey.surveypuskesmas', [
            'survey_puskesmas' => SurveyPuskesmas::all()
        ]);
    }

    public function detailpuskesmas(SurveyPuskesmas $survey_puskesmas){

        $survey_puskesmas = DB::table('survey_puskesmas')->where('id', $survey_puskesmas->id)->get();

        return view('admin.survey.detailpuskesmas', [
            'survey_puskesmas' => $survey_puskesmas
        ]);
    }

    public function kirimpuskesmas(Request $request){

        $validatedData = $request->validate([
            'kategori_survey' => 'required',
            'tanggal' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'umur' => 'required',
            'pendidikan' => 'required',
            'instansi' => 'required',
            'jabatan' => 'required',
            'email' => 'required',
            'nohp' => 'required',
            'pertanyaan1' => 'required',
            'pertanyaan2' => 'required',
            'pertanyaan3' => 'required',
            'pertanyaan4' => 'required',
            'pertanyaan5' => 'required',
            'pertanyaan6' => 'required',
            'pertanyaan7' => 'required',
            'pertanyaan8' => 'required',
            'pertanyaan9' => 'required',
            'pertanyaan10' => 'required',
            'masukan' => '',
            'saranpenyempurnaan' => '',
        ]);

        SurveyPuskesmas::create($validatedData);
        return redirect('/surveykepuasan/puskesmas')->with('success', 'Laporan Berhasil Dikirim');
    }

    public function kepuasanweb(){

        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();
        $kepuasanweb = DB::table('kepuasan_web')->get();
        return view('surveykepuasan.kepuasanweb', [
            'halaman' => 'Survey Kepuasan',
            'title' => 'Survey Kepuasan Website'
        ])->with('kepuasanweb', $kepuasanweb)
        ->with('kabarsidebar', $kabarsidebar)->with('agenda', $agenda);
            if($kepuasanweb == 'puas'){
                ($kepuasanweb->puas) == ($kepuasanweb->puas)+1;
            }
        
    }

    public function kirimkebutuhan(Request $request){

        $validatedData = $request->validate([
            // 'kategori_survey' => 'required',
            'kebutuhan' => '',
    ]);
    
    SurveyKebutuhan::create($validatedData);
    return redirect('/kepuasanweb')->with('success', 'Kritik dan Saran Berhasil Dikirim');
    
    }
    
    public function surveykebutuhan(){
        
        return view('admin.survey.surveykebutuhan', [
            'kebutuhan_web' => SurveyKebutuhan::all()
        ]);
    }


    

    public function penghargaan(){
        $kabarsidebar = DB::table('post')->latest()->take(5)->get();
        $agenda = DB::table('agenda')->latest()->take(5)->get();

        return view('profil.penghargaan',[
            'halaman' => 'Profil',
            'title' => 'Penghargaan'
        ])->with('kabarsidebar', $kabarsidebar)->with('agenda', $agenda);
    }

}
