@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
            <div class="position-relative h-150">
                <div class="container">
                    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                        <h5 class="fw-bold text-primary text-uppercase">Pelayanan</h5>
                    </div>
                    <h6>Survey Kepuasan Masyarakat</h6>
                    <p>TENTANG PEMBERIAN REKOMENDASI REGISTRASI PUSKESMAS</p>
                    <br>
                    @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="/surveykepuasan/puskesmas/kirim" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" for="kategori_survey" id="kategori_survey" name="kategori_survey"
                                value="puskesmas" hidden>
                            <label for="tanggal" class="form-label">Tanggal Survey</label>
                            <input type="date" for="tanggal" id="tanggal" name="tanggal" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                placeholder="Masukkan nama">
                        </div>
                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label><br>
                            <input class="form-check-input" type="radio" id="lakilaki" name="jenis_kelamin"
                                value="Laki Laki">
                            <label class="isilabel" for="lakilaki"> Laki Laki</label><br>
                            <input class="form-check-input" type="radio" id="perempuan" name="jenis_kelamin"
                                value="Perempuan">
                            <label class="isilabel" for="perempuan"> Perempuan</label><br>
                        </div>

                        <div class="mb-3">
                            <label for="umur" class="form-label">Umur</label>
                            <input type="text" class="form-control" id="umur" name="umur"
                                placeholder="Masukkan umur">
                        </div>

                        <div class="mb-3">
                            <label for="pendidikan" class="form-label">Pendidikan Terakhir</label><br>
                            <input class="form-check-input" type="radio" id="smf" name="pendidikan"
                                value="SMF/SMK Farmasi">
                            <label class="isilabel" for="smf"> SMF/SMK Farmasi</label><br>
                            <input class="form-check-input" type="radio" id="d3" name="pendidikan"
                                value="Diploma III">
                            <label class="isilabel" for="d3"> Diploma III</label><br>
                            <input class="form-check-input" type="radio" id="s1" name="pendidikan"
                                value="Sarjana/Strata 1">
                            <label class="isilabel" for="s1"> Sarjana/Strata 1</label><br>
                        </div>

                        <div class="mb-3">
                            <label for="instansi" class="form-label">Instansi</label>
                            <input type="text" class="form-control" id="instansi" name="instansi"
                                placeholder="Masukkan instansi">
                        </div>
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan"
                                placeholder="Masukkan jabatan">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email"
                                placeholder="Masukkan email">
                        </div>
                        <div class="mb-3">
                            <label for="nohp" class="form-label">No. HP</label>
                            <input type="text" class="form-control" id="nohp" name="nohp"
                                placeholder="Masukkan No. HP">
                        </div>

                        <div class="mb-3">
                            <label for="pertanyaan1" class="form-label">Jenis Layanan yang Diterima</label><br>
                            <input class="form-check-input" type="radio" id="satu" name="pertanyaan1"
                                value="Registrasi Puskesmas Baru">
                            <label class="isilabel" for="satu"> Registrasi Puskesmas Baru</label><br>
                            <input class="form-check-input" type="radio" id="dua" name="pertanyaan1"
                                value="Registrasi Ulang Puskesmas">
                            <label class="isilabel" for="dua"> Registrasi Ulang Puskesmas</label><br>
                            <input class="form-check-input" type="radio" id="tiga" name="pertanyaan1"
                                value="Lainya">
                            <label class="isilabel" for="tiga"> Lainya</label><br>
                        </div>

                        <div class="mb-3">
                            <label for="pertanyaan2" class="form-label">Bagaimana pendapat Saudara tentang kesesuaian
                                persyaratan pelayanan dengan jenis pelayanan</label><br>
                            <input class="form-check-input" type="radio" id="tidaksesuai" name="pertanyaan2"
                                value="Tidak Sesuai">
                            <label class="isilabel" for="tidaksesuai"> Tidak Sesuai</label><br>
                            <input class="form-check-input" type="radio" id="kurangsesuai" name="pertanyaan2"
                                value="Kurang Sesuai">
                            <label class="isilabel" for="kurangsesuai"> Kurang Sesuai</label><br>
                            <input class="form-check-input" type="radio" id="sesuai" name="pertanyaan2"
                                value="Sesuai">
                            <label class="isilabel" for="sesuai"> Sesuai</label><br>
                            <input class="form-check-input" type="radio" id="sangatsesuai" name="pertanyaan2"
                                value="Sangat Sesuai">
                            <label class="isilabel" for="sangatsesuai"> Sangat Sesuai</label><br>
                        </div>

                        <div class="mb-3">
                            <label for="pertanyaan3" class="form-label">Bagaimana pemahaman Saudara tentang kemudahan
                                prosedur pelayanannya
                            </label><br>
                            <input class="form-check-input" type="radio" id="tidakmudah" name="pertanyaan3"
                                value="Tidak Mudah">
                            <label class="isilabel" for="tidakmudah"> Tidak Mudah</label><br>
                            <input class="form-check-input" type="radio" id="kurangmudah" name="pertanyaan3"
                                value="Kurang Mudah">
                            <label class="isilabel" for="kurangmudah"> Kurang Mudah</label><br>
                            <input class="form-check-input" type="radio" id="mudah3" name="pertanyaan3"
                                value="Mudah">
                            <label class="isilabel" for="mudah3"> Mudah</label><br>
                            <input class="form-check-input" type="radio" id="sangatmudah" name="pertanyaan3"
                                value="Sangat Mudah">
                            <label class="isilabel" for="sangatmudah"> Sangat Mudah</label><br>
                        </div>

                        <div class="mb-3">
                            <label for="pertanyaan4" class="form-label">Bagaimana pendapat Saudara tentang kecepatan waktu
                                dalam memberikan pelayanan</label><br>
                            <input class="form-check-input" type="radio" id="tidakcepat" name="pertanyaan4"
                                value="Tidak Cepat">
                            <label class="isilabel" for="tidakcepat"> Tidak Cepat</label><br>
                            <input class="form-check-input" type="radio" id="kurangcepat" name="pertanyaan4"
                                value="Kurang Cepat">
                            <label class="isilabel" for="kurangcepat"> Kurang Cepat</label><br>
                            <input class="form-check-input" type="radio" id="cepat3" name="pertanyaan4"
                                value="Cepat">
                            <label class="isilabel" for="cepat3"> Cepat</label><br>
                            <input class="form-check-input" type="radio" id="sangatcepat" name="pertanyaan4"
                                value="Sangat Cepat">
                            <label class="isilabel" for="sangatcepat"> Sangat Cepat</label><br>
                        </div>

                        <div class="mb-3">
                            <label for="pertanyaan5" class="form-label">Bagaimana pendapat Saudara tentang kewajaran
                                biaya/ tarif dalam pelayanan</label><br>
                            <input class="form-check-input" type="radio" id="sangatmahal" name="pertanyaan5"
                                value="Sangat Mahal">
                            <label class="isilabel" for="sangatmahal"> Sangat Mahal</label><br>
                            <input class="form-check-input" type="radio" id="cukupmahal" name="pertanyaan5"
                                value="Cukup Mahal">
                            <label class="isilabel" for="cukupmahal"> Cukup Mahal</label><br>
                            <input class="form-check-input" type="radio" id="murah5" name="pertanyaan5"
                                value="Murah">
                            <label class="isilabel" for="murah5"> Murah</label><br>
                            <input class="form-check-input" type="radio" id="gratis" name="pertanyaan5"
                                value="Gratis">
                            <label class="isilabel" for="gratis"> Gratis</label><br>
                        </div>

                        <div class="mb-3">
                            <label for="pertanyaan6" class="form-label">Bagaimana pendapat Saudara tentang kesesuaian
                                produk pelayanan antara yang tercantum dalam standar pelayanan dengan hasil yang
                                diberikan</label><br>
                            <input class="form-check-input" type="radio" id="tidaksesuai2" name="pertanyaan6"
                                value="Tidak Sesuai">
                            <label class="isilabel" for="tidaksesuai2"> Tidak Sesuai</label><br>
                            <input class="form-check-input" type="radio" id="kurangsesuai2" name="pertanyaan6"
                                value="Kurang Sesuai">
                            <label class="isilabel" for="kurangsesuai2"> Kurang Sesuai</label><br>
                            <input class="form-check-input" type="radio" id="sesuai2" name="pertanyaan6"
                                value="Sesuai">
                            <label class="isilabel" for="sesuai2"> Sesuai</label><br>
                            <input class="form-check-input" type="radio" id="sangatsesuai2" name="pertanyaan6"
                                value="Sangat Sesuai">
                            <label class="isilabel" for="sangatsesuai2"> Sangat Sesuai</label><br>
                        </div>

                        <div class="mb-3">
                            <label for="pertanyaan7" class="form-label">Bagaimana pendapat Saudara tentang kompetensi
                                kemampuan petugas dalam pelayanan</label><br>
                            <input class="form-check-input" type="radio" id="tidakkompeten" name="pertanyaan7"
                                value="Tidak Kompeten">
                            <label class="isilabel" for="tidakkompeten"> Tidak Kompeten</label><br>
                            <input class="form-check-input" type="radio" id="kurangkompeten" name="pertanyaan7"
                                value="Kurang Kompeten">
                            <label class="isilabel" for="kurangkompeten"> Kurang Kompeten</label><br>
                            <input class="form-check-input" type="radio" id="kompeten8" name="pertanyaan7"
                                value="Kompeten">
                            <label class="isilabel" for="kompeten8"> Kompeten</label><br>
                            <input class="form-check-input" type="radio" id="sangatkompeten" name="pertanyaan7"
                                value="Sangat Kompeten">
                            <label class="isilabel" for="sangatkompeten"> Sangat Kompeten</label><br>
                        </div>

                        <div class="mb-3">
                            <label for="pertanyaan8" class="form-label">Bagaimana pendapat Saudara tentang perilaku
                                petugas dalam pelayanan terkait kesopanan dan keramahan</label><br>
                            <input class="form-check-input" type="radio" id="tidaksopanramah" name="pertanyaan8"
                                value="Tidak Sopan dan Ramah">
                            <label class="isilabel" for="tidaksopanramah"> Tidak Sopan dan Ramah</label><br>
                            <input class="form-check-input" type="radio" id="kurangsopanramah" name="pertanyaan8"
                                value="Kurang Sopan dan Ramah">
                            <label class="isilabel" for="kurangsopanramah"> Kurang Sopan dan Ramah</label><br>
                            <input class="form-check-input" type="radio" id="sopanramah" name="pertanyaan8"
                                value="Sopan Ramah">
                            <label class="isilabel" for="sopanramah"> Sopan Ramah</label><br>
                            <input class="form-check-input" type="radio" id="sangatsopanramah" name="pertanyaan8"
                                value="Sangat Sopan dan Ramah">
                            <label class="isilabel" for="sangatsopanramah"> Sangat Sopan dan Ramah</label><br>
                        </div>

                        <div class="mb-3">
                            <label for="pertanyaan9" class="form-label">Bagaimana pendapat Saudara tentang kualitas
                                sarana dan prasarana</label><br>
                            <input class="form-check-input" type="radio" id="buruk" name="pertanyaan9"
                                value="Buruk">
                            <label class="isilabel" for="buruk"> Buruk</label><br>
                            <input class="form-check-input" type="radio" id="cukup" name="pertanyaan9"
                                value="Cukup">
                            <label class="isilabel" for="cukup"> Cukup</label><br>
                            <input class="form-check-input" type="radio" id="baik" name="pertanyaan9"
                                value="Baik">
                            <label class="isilabel" for="baik"> Baik</label><br>
                            <input class="form-check-input" type="radio" id="sangatbaik" name="pertanyaan9"
                                value="Sangat Baik">
                            <label class="isilabel" for="sangatbaik"> Sangat Baik</label><br>
                        </div>

                        <div class="mb-3">
                            <label for="pertanyaan10" class="form-label">Bagaimana pendapat Saudara tentang penanganan
                                pengaduan pengguna layanan</label><br>
                            <input class="form-check-input" type="radio" id="tidakada" name="pertanyaan10"
                                value="Tidak Ada">
                            <label class="isilabel" for="tidakada"> Tidak Ada</label><br>
                            <input class="form-check-input" type="radio" id="adattb" name="pertanyaan10"
                                value="Ada Tetapi Tidak Berfungsi">
                            <label class="isilabel" for="adattb"> Ada Tetapi Tidak Berfungsi</label><br>
                            <input class="form-check-input" type="radio" id="berfungsikm" name="pertanyaan10"
                                value="Berfungsi Kurang Maksimal">
                            <label class="isilabel" for="berfungsikm"> Berfungsi Kurang Maksimal</label><br>
                            <input class="form-check-input" type="radio" id="dikeloladb" name="pertanyaan10"
                                value="Dikelola Dengan Baik">
                            <label class="isilabel" for="dikeloladb"> Dikelola Dengan Baik</label><br>
                        </div>
                        <div class="mb-3">
                            <label for="masukan" class="form-label">Masukan</label>
                            <textarea class="form-control" id="masukan" name="masukan" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="saranpenyempurnaan" class="form-label">Saran Penyempurnaan</label>
                            <textarea class="form-control" id="saranpenyempurnaan" name="saranpenyempurnaan" rows="3"></textarea>
                        </div>
                        <br>
                        <button class="btn btn-primary mb-5">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
        @include('partials.sidebar')
    </div>
@endsection
