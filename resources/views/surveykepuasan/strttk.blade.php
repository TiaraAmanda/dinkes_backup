@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
            <div class="position-relative h-150">
                <div class="container">
                    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                        <h5 class="fw-bold text-primary text-uppercase">Pelayanan</h5>
                    </div>
                    <h6>Survey Kepuasan Pelayanan STRTTK - Dinas Kesehatan Provinsi Jawa Timur</h6>
                    <p>Petunjuk Pengisian</p>
                    <p>
                    <ol style="text-align: left;">
                        <li>Mohon diisi sesuai dengan keadaan bapak/ibu yang sebenarnya, karena hal ini tidak mempengaruhi
                            kondite maupun pelayanan terhadap Bapak/Ibu, dan betul-betul untuk kepentingan ilmiah.</li>
                        <li>Cara Pengisian Kuesioner Bapak/Ibu cukup memilih jawaban yang tersedia sesuai dengan pendapat
                            Bapak/Ibu.</li>
                    </ol>
                    </p>

                    <br>
                    @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="/strttk/kirim" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" for="kategori_survey" id="kategori_survey" name="kategori_survey"
                                value="strttk" hidden>
                            <label for="umur" class="form-label">Umur</label>
                            <input type="text" class="form-control" id="umur" name="umur"
                                placeholder="Masukkan umur">
                        </div>

                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label><br>
                            <input class="form-check-input" type="radio" id="lakilaki" name="jenis_kelamin"
                                value="L">
                            <label class="isilabel" for="lakilaki"> Laki Laki</label><br>
                            <input class="form-check-input" type="radio" id="perempuan" name="jenis_kelamin"
                                value="P">
                            <label class="isilabel" for="perempuan"> Perempuan</label><br>
                        </div>

                        <div class="mb-3">
                            <label for="pertanyaan2" class="form-label">Pendidikan Terkhir</label><br>
                            <input class="form-check-input" type="radio" id="smf" name="pertanyaan2" value="1">
                            <label class="isilabel" for="smf"> SMF/SMK Farmasi</label><br>
                            <input class="form-check-input" type="radio" id="d3" name="pertanyaan2" value="2">
                            <label class="isilabel" for="d3"> Diploma III</label><br>
                            <input class="form-check-input" type="radio" id="s1" name="pertanyaan2" value="3">
                            <label class="isilabel" for="s1"> Sarjana/Strata 1</label><br>
                        </div>

                        <div class="mb-3">
                            <label for="pertanyaan3" class="form-label">Bagaimana Persyaratan yang harus dipenuhi dalam
                                penerbitan STRTTK ?</label><br>
                            <input class="form-check-input" type="radio" id="sm" name="pertanyaan3" value="SM">
                            <label class="isilabel" for="sm"> Sangat Mudah</label><br>
                            <input class="form-check-input" type="radio" id="m" name="pertanyaan3" value="M">
                            <label class="isilabel" for="m"> Mudah</label><br>
                            <input class="form-check-input" type="radio" id="cm" name="pertanyaan3" value="CM">
                            <label class="isilabel" for="cm"> Cukup Mudah</label><br>
                            <input class="form-check-input" type="radio" id="s" name="pertanyaan3" value="S">
                            <label class="isilabel" for="s"> Sulit</label><br>
                        </div>

                        <div class="mb-3">
                            <label for="pertanyaan4" class="form-label">Menurut Bpk/Ibu/Sdr bagaimana prosedur/tata cara
                                penerbitan STRTTK dengan menggunakan aplikasi : strttkdinkes.pafijatim.or.id ? </label><br>
                            <input class="form-check-input" type="radio" id="sangatmudah9" name="pertanyaan4"
                                value="SM">
                            <label class="isilabel" for="sangatmudah9"> Sangat Mudah</label><br>
                            <input class="form-check-input" type="radio" id="mudah9" name="pertanyaan4"
                                value="M">
                            <label class="isilabel" for="mudah9"> Mudah</label><br>
                            <input class="form-check-input" type="radio" id="cm9" name="pertanyaan4"
                                value="CM">
                            <label class="isilabel" for="cm9"> Cukup Mudah</label><br>
                            <input class="form-check-input" type="radio" id="s9" name="pertanyaan4"
                                value="S">
                            <label class="isilabel" for="s9"> Sulit</label><br>
                        </div>

                        <div class="mb-3">
                            <label for="pertanyaan5" class="form-label">Bagaimana jangka waktu pelayanan Penerbitan STRTTK
                                mulai dinyatakan berkas lengkap hingga Anda mendapatkan notifikasi STRTTK selesai dan dapat
                                diambil ? </label><br>
                            <input class="form-check-input" type="radio" id="sc" name="pertanyaan5"
                                value="SC">
                            <label class="isilabel" for="sc"> Sangat Cepat</label><br>
                            <input class="form-check-input" type="radio" id="c" name="pertanyaan5"
                                value="C">
                            <label class="isilabel" for="c"> Cepat</label><br>
                            <input class="form-check-input" type="radio" id="cc" name="pertanyaan5"
                                value="CC">
                            <label class="isilabel" for="cc"> Cukup Cepat</label><br>
                            <input class="form-check-input" type="radio" id="l" name="pertanyaan5"
                                value="L">
                            <label class="isilabel" for="l"> Lama</label><br>
                        </div>

                        <div class="mb-3">
                            <label for="pertanyaan6" class="form-label">Menurut Bpk/Ibu/Sdr, bagaimana hasil pelayanan
                                penerbitan STRTTK di Dinas Kesehatan Provinsi Jawa Timur ?</label><br>
                            <input class="form-check-input" type="radio" id="sangatmemuaskan" name="pertanyaan6"
                                value="SM">
                            <label class="isilabel" for="sangatmemuaskan"> Sangat Memuaskan</label><br>
                            <input class="form-check-input" type="radio" id="memuaskan" name="pertanyaan6"
                                value="M">
                            <label class="isilabel" for="memuaskan"> Memuaskan</label><br>
                            <input class="form-check-input" type="radio" id="cukupmemuaskan" name="pertanyaan6"
                                value="CM">
                            <label class="isilabel" for="cukupmemuaskan"> Cukup Memuaskan</label><br>
                            <input class="form-check-input" type="radio" id="tidakmemuaskan" name="pertanyaan6"
                                value="TM">
                            <label class="isilabel" for="tidakmemuaskan"> Tidak Memuaskan</label><br>
                        </div>

                        <div class="mb-3">
                            <label for="pertanyaan7" class="form-label">Menurut Bpk/Ibu/sdr, bagaimana kemampuan
                                (pengetahuan, keahlian, keterampilan, dan pengalaman) petugas ?</label><br>
                            <input class="form-check-input" type="radio" id="sangatmmampu" name="pertanyaan7"
                                value="SM">
                            <label class="isilabel" for="sangatmmampu"> Sangat Mampu</label><br>
                            <input class="form-check-input" type="radio" id="mampu2" name="pertanyaan7"
                                value="M">
                            <label class="isilabel" for="mampu2"> Mampu</label><br>
                            <input class="form-check-input" type="radio" id="cukupmampu2" name="pertanyaan7"
                                value="CM">
                            <label class="isilabel" for="cukupmampu2"> Cukup Mampu</label><br>
                            <input class="form-check-input" type="radio" id="tidakmampu2" name="pertanyaan7"
                                value="TM">
                            <label class="isilabel" for="tidakmampu2"> Tidak Mampu</label><br>
                        </div>

                        <div class="mb-3">
                            <label for="pertanyaan8" class="form-label">Bagaimana sikap petugas saat memberikan Pelayanan
                                penerbitan STRTTK ?</label><br>
                            <input class="form-check-input" type="radio" id="sangatbaik" name="pertanyaan8"
                                value="SB">
                            <label class="isilabel" for="sangatbaik"> Sangat Baik</label><br>
                            <input class="form-check-input" type="radio" id="baik" name="pertanyaan8"
                                value="B">
                            <label class="isilabel" for="baik"> Baik</label><br>
                            <input class="form-check-input" type="radio" id="cukupbaik" name="pertanyaan8"
                                value="CB">
                            <label class="isilabel" for="cukupbaik"> Cukup Baik</label><br>
                            <input class="form-check-input" type="radio" id="tidakbaik" name="pertanyaan8"
                                value="TB">
                            <label class="isilabel" for="tidakbaik"> Tidak Baik</label><br>
                        </div>

                        <div class="mb-3">
                            <label for="pertanyaan9" class="form-label">Menurut Bpk/Ibu/Sdr, bagaimana Fasilitas ruangan
                                tempat pelayanan Pengambilan STRTTK ?</label><br>
                            <input class="form-check-input" type="radio" id="sangatnyaman" name="pertanyaan9"
                                value="SN">
                            <label class="isilabel" for="sangatnyaman"> Sangat Mudah</label><br>
                            <input class="form-check-input" type="radio" id="nyaman" name="pertanyaan9"
                                value="N">
                            <label class="isilabel" for="nyaman"> Nyaman</label><br>
                            <input class="form-check-input" type="radio" id="cukupnyaman" name="pertanyaan9"
                                value="CN">
                            <label class="isilabel" for="cukupnyaman"> Cukup Nyaman</label><br>
                            <input class="form-check-input" type="radio" id="tidaknyaman" name="pertanyaan9"
                                value="TN">
                            <label class="isilabel" for="tidaknyaman"> Tidak Nyaman</label><br>
                        </div>

                        <div class="mb-3">
                            <label for="pertanyaan10" class="form-label">Menurut Bpk/Ibu/Sdr, bagaimana penanganan
                                pengaduan, saran dan masukan, serta tindak terkait pelayanan STRTTK ?</label><br>
                            <input class="form-check-input" type="radio" id="sangatbaik2" name="pertanyaan10"
                                value="SB">
                            <label class="isilabel" for="sangatbaik2"> Sangat Baik</label><br>
                            <input class="form-check-input" type="radio" id="baik2" name="pertanyaan10"
                                value="B">
                            <label class="isilabel" for="baik2"> Baik</label><br>
                            <input class="form-check-input" type="radio" id="cukupbaik2" name="pertanyaan10"
                                value="CB">
                            <label class="isilabel" for="cukupbaik2"> Cukup Baik</label><br>
                            <input class="form-check-input" type="radio" id="tidakbaik2" name="pertanyaan10"
                                value="TB">
                            <label class="isilabel" for="tidakbaik2"> Tidak Baik</label><br>
                        </div>
                        <div class="mb-3">
                            <label for="kritiksaran" class="form-label">Kritik dan Saran</label>
                            <textarea class="form-control" id="kritiksaran" name="kritiksaran" rows="3"></textarea>
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
