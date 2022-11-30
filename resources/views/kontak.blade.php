@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
            <div class="position-relative h-150">
                <div class="container">
                    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                        <h5 class="fw-bold text-primary text-uppercase">Kontak</h5>
                    </div>
                    <div class="row">
                        <div class="card mb-2">
                            <div class="card-body">
                                <center>
                                    <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-5"
                                        style="width: 60px; height: 60px;">
                                        <i class="fa fa-phone-alt text-white"></i>
                                    </div>
                                    <p class="card-text">Telp. (031) 8280910<br>Fax. (031)8290423</p>
                                </center>
                            </div>
                        </div>
                        <div class="card mb-2">
                            <div class="card-body">
                                <center>
                                    <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-5"
                                        style="width: 60px; height: 60px;">
                                        <i class="fa fa-map-marker text-white"></i>
                                    </div>
                                    <p class="card-text">
                                        Jl. Ahmad Yani No.118, Ketintang,
                                        <br>Kec. Gayungan, Kota SBY,
                                        Jawa Timur - 60231
                                    </p>
                                </center>
                            </div>
                        </div>
                        <div class="card mb-5">
                            <div class="card-body">
                                <center>
                                    <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-5"
                                        style="width: 60px; height: 60px;">
                                        <i class="fa fa-envelope text-white"></i>
                                    </div>
                                    <p class="card-text">ppid@dinkes.jatimprov.go.id</p>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                        <h5 class="fw-bold text-primary text-uppercase">Sistem Pelaporan Pelanggaran</h5>
                    </div>

                    <div class="text-center position-relative pb-3 mx-auto" style="max-width: 600px;">
                        <p class="mb-5 .text-dark" style="text-align: center; font-size: 16px">Jika Bapak / Ibu
                            menemukan pelanggaran di lingkungan Dinas Kesehatan Provinsi Jawa Timur yang mengarah kepada
                            Korupsi,
                            Kolusi, Nepotisme dan Gratifikasi, maka bisa dilaporkan dengan melampirkan bukti yang otentik
                            untuk segera kami tindaklanjuti. Terima kasih.</p>
                        <div class="col-4 mb-5 text-center position-relative pb-3 mx-auto">
                            <button class="btn btn-primary w-100 py-3" data-bs-toggle="modal" data-bs-target="#laporkan"
                                type="submit">Laporkan</button>
                        </div>
                    </div>
                    <!-- Pop Up -->
                    <div class="modal fade" id="laporkan" tabindex="-1">
                        <div class="modal-dialog ">
                            <div class="modal-content">
                                <div class="modal-header border-0">
                                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h2 class="text-primary text-center mt-4">DISCLAIMER</h2>
                                    <i
                                        class="fa-solid fa-triangle-exclamation fa-6x text-primary col-lg-12 text-center p-4"></i>
                                    <h5 class="text-primary text-center">
                                        Setiap pelaporan pelanggaran baik itu benar ataupun
                                        palsu akan diproses sesuai aturan yang berlaku</h5>
                                    <div class="col-12 text-center position-relative p-4 mb-4">
                                        <a href="/laporankontak" class="btn btn-primary w-50 py-2">Saya mengerti</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.sidebar')
    </div>
@endsection
