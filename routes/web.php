<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PpidController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\InstitusiController;
use App\Http\Controllers\KonfigurasiController;
use App\Http\Controllers\PublicCornerController;
use App\Http\Controllers\ProfilPejabatController;
use App\Http\Controllers\NavController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// Front End Pengunjung

Route::get('/beranda', [BerandaController::class, 'beranda']);

Route::get('/kontak', [NavController::class, 'kontak']);
Route::get('/laporankontak', [InstitusiController::class, 'laporankontak']);
Route::post('/kirimlaporan', [InstitusiController::class, 'kirimlaporan']);
Route::get('/faq', [NavController::class, 'faq']);
Route::get('/sitemap', [NavController::class, 'sitemap']);
Route::get('/pelayanan', [NavController::class, 'pelayanan']);

Route::get('/visimisi', [InstitusiController::class, 'visimisi']);
Route::get('/motto', [InstitusiController::class, 'motto']);
Route::get('/tujuan', [InstitusiController::class, 'tujuan']);
Route::get('/kebijakan', [InstitusiController::class, 'kebijakan']);
Route::get('/struktur-organisasi', [InstitusiController::class, 'strukturorganisasi']);
Route::get('/maklumat', [InstitusiController::class, 'maklumat']);
Route::get('/penghargaan', [InstitusiController::class, 'penghargaan']);
Route::get('/profil-pejabat', [ProfilPejabatController::class, 'profilpejabatview']);

Route::get('/berita', [BerandaController::class, 'berita']);
Route::get('/artikel', [BerandaController::class, 'artikel']);


// Route::get('/', 'PostController@index');
// Route::get('/{slug}', 'PostController@show');
// Route::post('/comment', 'PostController@comment');

Route::prefix('/bidang')->group(function(){
    Route::get('/sekretariat', [BerandaController::class, 'tampilSekretariat']);
    Route::get('/kesma', [BerandaController::class, 'tampilKesma']);
    Route::get('/pencegahan', [BerandaController::class, 'tampilPencegahan']);
    Route::get('/pelayanan', [BerandaController::class, 'tampilPelayanan']);
    Route::get('/sumber-daya', [BerandaController::class, 'tampilSumberDaya']);
});


Route::get('/public-corner', [PublicCornerController::class, 'publiccornerfrontend']);
Route::get('/public-corner/semua', [PublicCornerController::class, 'semua']);
Route::post('/public-corner/kirimpertanyaan', [PublicCornerController::class, 'kirimpertanyaan']);
Route::get('/public-corner/{public_corner:id}/view', [PublicCornerController::class, 'tampil']);

Route::get('/strttk', [InstitusiController::class, 'strttk']);
Route::get('/surveykepuasan/puskesmas', [InstitusiController::class, 'puskesmas']);
Route::get('/kepuasanweb', [InstitusiController::class, 'kepuasanweb']);
Route::post('/strttk/kirim', [InstitusiController::class, 'kirimstrttk']);
Route::post('/surveykepuasan/puskesmas/kirim', [InstitusiController::class, 'kirimpuskesmas']);
Route::post('/kepuasanweb', [InstitusiController::class, 'kepuasanweb']);

Route::get('/upt-dinas-kesehatan', [BerandaController::class, 'upt']);
Route::get('/dinas-kesehatan-kabkota',[BerandaController::class, 'dinkeskabkota']);

// Admin Page

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function(){
    return view('admin.dashboard');
})->middleware('auth');

Route::get('/institusi', [InstitusiController::class,'institusi'])->middleware('auth');
Route::get('/ubah-password', [KonfigurasiController::class, 'gantipassword'])->middleware('auth');
Route::post('/ubah-password', [KonfigurasiController::class, 'ubahpassword'])->middleware('auth');

Route::prefix('/institusi')->group(function(){
    Route::get('/editvisimisi', [InstitusiController::class, 'editVisimisi'])->middleware('auth');
    Route::post('/updatevisimisi', [InstitusiController::class, 'updateVisimisi'])->middleware('auth');
    Route::post('/visimisi/createvisimisi', [InstitusiController::class, 'createVisimisi'])->middleware('auth');

    Route::get('/edittujuan', [InstitusiController::class, 'editTujuan'])->middleware('auth');
    Route::post('/updatetujuan', [InstitusiController::class, 'updateTujuan'])->middleware('auth');
    Route::post('/tujuan/halamanTujuan', [InstitusiController::class, 'halamanTujuan']);

    Route::get('/editmotto', [InstitusiController::class, 'editMotto'])->middleware('auth');
    Route::post('/updatemotto', [InstitusiController::class, 'updateMotto'])->middleware('auth');
    Route::post('/motto/halamanMotto', [InstitusiController::class, 'halamanMotto']);

    Route::get('/editkebijakan', [InstitusiController::class, 'editKebijakan'])->middleware('auth');
    Route::post('/updatekebijakan', [InstitusiController::class, 'updateKebijakan'])->middleware('auth');
    Route::post('/kebijakan/halamanKebijakan', [InstitusiController::class, 'halamanKebijakan']);

    Route::get('/editstrukturorganisasi', [InstitusiController::class, 'editStrukturOrganisasi'])->middleware('auth');
    Route::post('/updatestrukturorganisasi', [InstitusiController::class, 'updateStrukturOrganisasi'])->middleware('auth');
    Route::post('/strukturorganisasi/halamanStrukturOrganisasi', [InstitusiController::class, 'halamanStrukturOrganisasi']);

    Route::get('/editmaklumat', [InstitusiController::class, 'editMaklumat'])->middleware('auth');
    Route::post('/updatemaklumat', [InstitusiController::class, 'updateMaklumat'])->middleware('auth');
    Route::post('/maklumat/halamanMaklumat', [InstitusiController::class, 'halamanMaklumat']);

});

// Route::prefix('/survey')->group(function(){
    Route::get('/survey/surveystrttk', [InstitusiController::class, 'surveystrttk'])->middleware('auth');
    Route::get('/survey/surveypuskesmas', [InstitusiController::class, 'surveypuskesmas'])->middleware('auth');
// });



Route::prefix('/profilpejabat')->group(function(){
    Route::get('/', [ProfilPejabatController::class, 'ProfilPejabat'])->middleware('auth');
    Route::get('/editkepaladinkes', [ProfilPejabatController::class, 'dataKadinkes'])->middleware('auth');
    Route::post('/createkepaladinkes', [ProfilPejabatController::class, 'editKadinkes'])->middleware('auth');
    Route::post('/updatekepaladinkes', [ProfilPejabatController::class, 'updateKadinkes'])->middleware('auth');

    Route::get('/sekretariat', [ProfilPejabatController::class, 'dataSekretariat'])->middleware('auth');
    Route::get('/tambahsekretariat', [ProfilPejabatController::class, 'tambahSekretariat'])->middleware('auth');
    Route::post('/createsekretariat', [ProfilPejabatController::class, 'editSekretariat'])->middleware('auth');
    Route::post('/updatesekretariat', [ProfilPejabatController::class, 'updateSekretariat'])->middleware('auth');

    Route::get('/bidangkesma', [ProfilPejabatController::class, 'dataBidangKesma'])->middleware('auth');
    Route::get('/tambahbidangkesma', [ProfilPejabatController::class, 'tambahBidangKesma'])->middleware('auth');
    Route::post('/createbidangkesma', [ProfilPejabatController::class, 'editBidangKesma'])->middleware('auth');
    Route::post('/updatebidangkesma', [ProfilPejabatController::class, 'updateBidangKesma'])->middleware('auth');

    Route::get('/bidangppk', [ProfilPejabatController::class, 'dataBidangPPK'])->middleware('auth');
    Route::get('/tambahbidangppk', [ProfilPejabatController::class, 'tambahBidangPPK'])->middleware('auth');
    Route::post('/createbidangppk', [ProfilPejabatController::class, 'editBidangPPK'])->middleware('auth');
    Route::post('/updatebidangppk', [ProfilPejabatController::class, 'updateBidangPPK'])->middleware('auth');

    Route::get('/bidangpk', [ProfilPejabatController::class, 'dataBidangPK'])->middleware('auth');
    Route::get('/tambahbidangpk', [ProfilPejabatController::class, 'tambahBidangPK'])->middleware('auth');
    Route::post('/createbidangpk', [ProfilPejabatController::class, 'editBidangPK'])->middleware('auth');
    Route::post('/updatebidangpk', [ProfilPejabatController::class, 'updateBidangPK'])->middleware('auth');

    Route::get('/bidangsdk', [ProfilPejabatController::class, 'dataBidangSDK'])->middleware('auth');
    Route::get('/tambahbidangsdk', [ProfilPejabatController::class, 'tambahBidangSDK'])->middleware('auth');
    Route::post('/createbidangsdk', [ProfilPejabatController::class, 'editBidangSDK'])->middleware('auth');
    Route::post('/updatebidangsdk', [ProfilPejabatController::class, 'updateBidangSDK'])->middleware('auth');

});

Route::prefix('/ppid')->group(function(){
    Route::get('/sejarah', [PpidController::class, 'sejarah'])->middleware('auth');
    Route::get('/editsejarah', [PpidController::class, 'editSejarah'])->middleware('auth');
    Route::post('/updatesejarah', [PpidController::class, 'updateSejarah'])->middleware('auth');
    Route::post('/sejarah/halamanSejarah', [PpidController::class, 'halamanSejarah'])->middleware('auth');

    Route::get('/struktur-tupoksi', [PpidController::class, 'stpk'])->middleware('auth');
    Route::get('/tambahstpk', [PpidController::class, 'tambahStpk'])->middleware('auth');
    Route::post('/createstpk', [PpidController::class, 'createStpk'])->middleware('auth');
    Route::post('/stpk/{ppid:id}/hapus', [PpidController::class, 'hapusStpk'])->middleware('auth');
    Route::get('/stpk/{ppid:id}/edit', [PpidController::class, 'editStpk'])->middleware('auth');
    Route::post('/stpk/{ppid:id}/update', [PpidController::class, 'updateStpk'])->middleware('auth');

    Route::get('/checkSlug', [PpidController::class, 'checkSlug'])->middleware('auth');

    Route::get('/tata-cara-permohonan', [PpidController::class, 'tcp'])->middleware('auth');
    Route::get('/tambahtcp', [PpidController::class, 'tambahTcp'])->middleware('auth');
    Route::post('/createtcp', [PpidController::class, 'createTcp'])->middleware('auth');
    Route::post('/tcp/{ppid:id}/hapus', [PpidController::class, 'hapusTcp'])->middleware('auth');
    Route::get('/tcp/{ppid:id}/edit', [PpidController::class, 'editTcp'])->middleware('auth');
    Route::post('/tcp/{ppid:id}/update', [PpidController::class, 'updateTcp'])->middleware('auth');

    Route::get('/daftar-informasi-publik', [PpidController::class, 'dip'])->middleware('auth');
    Route::get('/tambahdip', [PpidController::class, 'tambahDip'])->middleware('auth');
    Route::post('/createdip', [PpidController::class, 'createDip'])->middleware('auth');
    Route::post('/dip/{ppid:id}/hapus', [PpidController::class, 'hapusDip'])->middleware('auth');
    Route::get('/dip/{ppid:id}/edit', [PpidController::class, 'editDip'])->middleware('auth');
    Route::post('/dip/{ppid:id}/update', [PpidController::class, 'updateDip'])->middleware('auth');

});

Route::prefix('/data')->group(function(){
    Route::get('/agenda', [DataController::class, 'agenda'])->middleware('auth');
    Route::get('/tambahagenda', [DataController::class, 'tambahAgenda'])->middleware('auth');
    Route::post('/createagenda', [DataController::class, 'createAgenda'])->middleware('auth');
    Route::post('/agenda/{agenda:id}/hapus', [DataController::class, 'hapusAgenda'])->middleware('auth');
    Route::get('/publikasi-data-informasi', [DataController::class, 'pdi']);
    Route::get('/peraturan-aturan', [DataController::class, 'peraturanaturan']);
    Route::get('/pengadaan-barang-jasa', [DataController::class, 'barangjasa']);
    Route::get('/perencanaan-evaluasi', [DataController::class, 'perencanaanevaluasi']);
    Route::get('/call-center', [DataController::class, 'callcenter']);
});


Route::get('/data/berita', [PostController::class, 'berita'])->middleware('auth');
Route::get('/data/tambahberita', [PostController::class, 'tambahBerita'])->middleware('auth');
Route::post('/data/createberita', [PostController::class, 'createBerita'])->middleware('auth');
Route::get('/data/berita/{post:id}/edit', [PostController::class, 'editBerita'])->middleware('auth');
Route::post('/data/berita/{post:id}/update', [PostController::class, 'updateBerita'])->middleware('auth');
Route::post('/data/berita/{post:id}/hapus', [PostController::class, 'hapusBerita'])->middleware('auth');
Route::get('/data/berita/tambahberita/checkSlug', [PostController::class, 'checkSlug'])->middleware('auth');
Route::get('/{post:slug}', [BerandaController::class, 'tampilBerita']);
Route::get('/bidang/{post:bidang_id}', [BerandaController::class, 'tampilKategori']);

// Route::post('/comment', 'PostController@comment');
// Route::get('/{slug}', [PostController::class,'show']);
Route::post('/comment', [PostController::class,'comment']);

Route::get('/data/artikel', [PostController::class, 'artikel'])->middleware('auth');
Route::get('/data/tambahartikel', [PostController::class, 'tambahArtikel'])->middleware('auth');
Route::post('/data/createartikel', [PostController::class, 'createArtikel'])->middleware('auth');
Route::get('/data/artikel/{post:id}/edit', [PostController::class, 'editArtikel'])->middleware('auth');
Route::post('/data/artikel/{post:id}/update', [PostController::class, 'updateArtikel'])->middleware('auth');
Route::post('/data/artikel/{post:id}/hapus', [PostController::class, 'hapusArtikel'])->middleware('auth');
Route::get('/data/artikel/tambahartikel/checkSlug', [PostController::class, 'checkSlug'])->middleware('auth');



Route::prefix('/datainformasi')->group(function(){
    Route::get('/dokumen-publikasi', [DataController::class, 'dp'])->middleware('auth');
    Route::get('/tambahdatadp', [DataController::class, 'tambahDp'])->middleware('auth');
    Route::post('/createdp', [DataController::class, 'createDp'])->middleware('auth');
    Route::post('/{data:id}/hapus', [DataController::class, 'hapusDp'])->middleware('auth');

    Route::get('/peraturan-aturan', [DataController::class, 'pa'])->middleware('auth');
    Route::get('/tambahdatapa', [DataController::class, 'tambahPa'])->middleware('auth');
    Route::post('/createpa', [DataController::class, 'createPa'])->middleware('auth');
    Route::post('/pa/{data:id}/hapus', [DataController::class, 'hapusPa'])->middleware('auth');

    Route::get('/laporan-kinerja', [DataController::class, 'lk'])->middleware('auth');
    Route::get('/tambahdatalk', [DataController::class, 'tambahLk'])->middleware('auth');
    Route::post('/createlk', [DataController::class, 'createLk'])->middleware('auth');
    Route::post('/lk/{data:id}/hapus', [DataController::class, 'hapusLk'])->middleware('auth');

    Route::get('/saka-bakti-husada', [DataController::class, 'sbh'])->middleware('auth');
    Route::get('/tambahdatasbh', [DataController::class, 'tambahSbh'])->middleware('auth');
    Route::post('/createsbh', [DataController::class, 'createSbh'])->middleware('auth');
    Route::post('/sbh/{data:id}/hapus', [DataController::class, 'hapusSbh'])->middleware('auth');
});

Route::prefix('/admin')->group(function(){
    Route::get('/public-corner', [PublicCornerController::class, 'publiccorner'])->middleware('auth');
    Route::get('/public-corner/{public_corner:id}/edit', [PublicCornerController::class, 'jawabPertanyaan'])->middleware('auth');
    Route::post('/public-corner/{public_corner:id}/update', [PublicCornerController::class, 'updateJawaban'])->middleware('auth');
    Route::get('/bank-data-spm', [DataController::class, 'spm'])->middleware('auth');
    Route::get('/tambahdataspm', [DataController::class, 'tambahSpm'])->middleware('auth');
    Route::post('/createspm', [DataController::class, 'createSpm'])->middleware('auth');
    Route::post('/spm/{spm:id}/hapus', [DataController::class, 'hapusSpm'])->middleware('auth');

});

Route::prefix('/konfig')->group(function(){
    Route::get('/user', [KonfigurasiController::class, 'datauser'])->middleware('auth');
    Route::get('/tambahuser', [KonfigurasiController::class, 'tambahUser'])->middleware('auth');
    Route::post('/createuser', [KonfigurasiController::class, 'createUser'])->middleware('auth');
    Route::post('/user/{user:id}/hapus', [KonfigurasiController::class, 'hapusUser'])->middleware('auth');
    Route::get('/user/{user:id}/edit', [KonfigurasiController::class, 'editUser'])->middleware('auth');
    Route::post('/user/{user:id}/update', [KonfigurasiController::class, 'updateUser'])->middleware('auth');

    Route::get('/bidang', [KonfigurasiController::class, 'databidang'])->middleware('auth');
    Route::get('/tambahbidang', [KonfigurasiController::class, 'tambahBidang'])->middleware('auth');
    Route::post('/createbidang', [KonfigurasiController::class, 'createBidang'])->middleware('auth');
    Route::post('/bidang/{bidang:id}/hapus', [KonfigurasiController::class, 'hapusBidang'])->middleware('auth');

    Route::get('/sosial-media', [KonfigurasiController::class, 'sosialmedia'])->middleware('auth');
    Route::get('/tambahsm', [KonfigurasiController::class, 'tambahSm'])->middleware('auth');
    Route::post('/createsm', [KonfigurasiController::class, 'createSm'])->middleware('auth');
    Route::post('/sm/{sosial_media:id}/hapus', [KonfigurasiController::class, 'hapusSm'])->middleware('auth');

    Route::get('/popup', [KonfigurasiController::class, 'popup'])->middleware('auth');
    Route::get('/tambahpopup', [KonfigurasiController::class, 'tambahPopup'])->middleware('auth');
    Route::post('/createpopup', [KonfigurasiController::class, 'createPopup'])->middleware('auth');
    Route::post('/popup/updatepopup', [KonfigurasiController::class, 'updatePopup'])->middleware('auth');

});
