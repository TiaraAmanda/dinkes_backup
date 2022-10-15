@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
            <div class="position-relative h-150">
                <div class="container mb-5">
                    <div class="section-title position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                        <h5 class="fw-bold text-primary text-uppercase">Pelaporan Pelanggaran</h5>
                    </div>
                    @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="/kirimlaporan" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email"
                                placeholder="Masukkan email">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                placeholder="Masukkan nama lengkap">
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="what" class="form-label">What</label>
                            <input type="text" class="form-control" id="what" name="what">
                            <div class="form-text">Perbuatan apa yang terindikasi Tindak Pidana Korupsi/pelanggaran yang
                                Anda ketahui? Jelaskan!</div>

                        </div>
                        <div class="mb-3">
                            <label for="who" class="form-label">Who</label>
                            <input type="text" class="form-control" id="who" name="who">
                            <div class="form-text">Siapa yang bertanggungjawab/terlibat dan terkait dalam perbuatan
                                tersebut? Jelaskan!</div>
                        </div>
                        <div class="mb-3">
                            <label for="where" class="form-label">Where</label>
                            <input type="text" class="form-control" id="where" name="where">
                            <div class="form-text">Dimana tempat terjadinya perbuatan tersebut? Jelaskan!</div>
                        </div>
                        <div class="mb-3">
                            <label for="when" class="form-label">When</label>
                            <input type="date" class="form-control" id="when" name="when">
                            <div class="form-text">Kapan waktu perbuatan tersebut dilakukan?</div>
                        </div>
                        <div class="mb-3">
                            <label for="how" class="form-label">How</label>
                            <input type="text" class="form-control" id="how" name="how">
                            <div class="form-text">Bagaimana cara perbuatan tersebut dilakukan (modus, cara, dan
                                sebagainya)? Jelaskan!</div>
                        </div>

                        <div class="mb-3">
                            <label for="bukti" class="form-label">Bukti</label>
                            <input type="file" class="form-control" id="bukti" name="bukti">
                            <div class="form-text">Lengkapi dengan bukti permulaan (data, dokumen, gambar dan rekaman) yang
                                mendukung</div>
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="informasitambahan" class="form-label">Informasi Tambahan</label>
                            <input type="text" class="form-control" id="informasitambahan" name="informasitambahan"
                                placeholder="Masukkan Informasi Tambahan">
                        </div>
                        <button class="btn btn-primary">Kirim Pertanyaan</button>
                    </form>
                </div>
            </div>
        </div>
        @include('partials.sidebar')
    </div>
@endsection
