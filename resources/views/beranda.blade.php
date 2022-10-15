@extends('layouts.beranda')


@section('container')
    <!-- Blog Start -->
    <div class="container-fluid py-55 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-55">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Berita Terkini</h5>
            </div>
            <div class="row g-5">
                @foreach ($berita as $item)
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid2" src="/storage/{{ $item->image }}" alt=""
                                    style="height: 250px;">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-3 py-2 px-4"
                                    href="/bidang/{{ $item->bidang_id }}">{{ $item->nama_bidang }}</a>
                            </div>

                            <div class="p-4">
                                <h5 class="mb-3">{{ $item->judul }}</h5>
                                <p>{{ strip_tags(Str::limit($item->body, 100)) }}</p>
                                <a class="text-uppercase" href="/{{ $item->slug }}">Read More <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>
            <br><br>
            <center><a href="/berita" class="fw-bold text-primary text-uppercase">Lebih Banyak Berita</a></center>
        </div>
    </div>
    <!-- Blog Start -->


    <!-- Service Start -->
    <div class="container py-55">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Data & Informasi</h5>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa-solid fa-file-lines text-white"></i>
                    </div>
                    <h4 class="mb-3">Publikasi Data & Informasi</h4>
                    <p class="m-0">Daftar Informasi Dinas Kesehatan Provinsi Jawa Timur Untuk Publik</p>
                    <a class="btn btn-lg btn-primary rounded" href="/data/publikasi-data-informasi">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa-solid fa-file-lines text-white"></i>
                    </div>
                    <h4 class="mb-3">Peraturan & Aturan</h4>
                    <p class="m-0">Daftar Informasi Dinas Kesehatan Provinsi Jawa Timur Untuk Publik</p>
                    <a class="btn btn-lg btn-primary rounded" href="/data/peraturan-aturan">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa-solid fa-file-lines text-white"></i>
                    </div>
                    <h4 class="mb-3">Pengadaan Barang & Jasa</h4>
                    <p class="m-0">Daftar Informasi Dinas Kesehatan Provinsi Jawa Timur Untuk Publik</p>
                    <a class="btn btn-lg btn-primary rounded" href="/data/pengadaan-barang-jasa">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa-solid fa-file-lines text-white"></i>
                    </div>
                    <h4 class="mb-3">Perencanaan & Evaluasi</h4>
                    <p class="m-0">Daftar Informasi Dinas Kesehatan Provinsi Jawa Timur Untuk Publik</p>

                    <a class="btn btn-lg btn-primary rounded" href="/data/perencanaan-evaluasi">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-search text-white"></i>
                    </div>
                    <h4 class="mb-3">Situasi Terkini COVID-19</h4>
                    <p class="m-0">Daftar Informasi Dinas Kesehatan Provinsi Jawa Timur Untuk Publik</p>
                    <a class="btn btn-lg btn-primary rounded" href="https://covid19.kemkes.go.id/">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-search text-white"></i>
                    </div>
                    <h4 class="mb-3">Call Center COVID-19</h4>
                    <p class="m-0">Daftar Informasi Dinas Kesehatan Provinsi Jawa Timur Untuk Publik</p>
                    <a class="btn btn-lg btn-primary rounded" href="/data/call-center">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <!-- Service End -->

    <!-- Blog Start -->
    <div class="container-fluid py-55 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-55">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Artikel Kesehatan</h5>
            </div>
            <div class="row g-5">
                @foreach ($artikel as $item)
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid2" src="/storage/{{ $item->image }}" alt=""
                                    style="height: 250px;">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-3 py-2 px-4"
                                    href="/bidang/{{ $item->bidang_id }}">{{ $item->nama_bidang }}</a>
                            </div>

                            <div class="p-4">
                                <h5 class="mb-3">{{ $item->judul }}</h5>
                                <p>{{ strip_tags(Str::limit($item->body, 100)) }}</p>
                                <a class="text-uppercase" href="/{{ $item->slug }}">Read More <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
            <br><br>
            <center><a href="/artikel" class="fw-bold text-primary text-uppercase">Lebih Banyak Artikel</a></center>
        </div>
    </div>
    <!-- Blog Start -->


    <!-- Service Start -->
    <div class="container py-55">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Bidang Dinas Kesehatan</h5>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa-solid fa-file-lines text-white"></i>
                    </div>
                    <h4 class="mb-3">Sekretariat</h4>
                    <a class="btn btn-lg btn-primary rounded" href="/bidang/sekretariat">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa-solid fa-file-lines text-white"></i>
                    </div>
                    <h4 class="mb-3">Bidang Kesehatan Masyarakat</h4>
                    <a class="btn btn-lg btn-primary rounded" href="/bidang/kesma">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa-solid fa-file-lines text-white"></i>
                    </div>
                    <h4 class="mb-3">Bidang Pencegahan dan Pengendalian Penyakit</h4>
                    <a class="btn btn-lg btn-primary rounded" href="/bidang/pencegahan">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa-solid fa-file-lines text-white"></i>
                    </div>
                    <h4 class="mb-3">Bidang Pelayanan Kesehatan</h4>
                    <a class="btn btn-lg btn-primary rounded" href="/bidang/pelayanan">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa-solid fa-file-lines text-white"></i>
                    </div>
                    <h4 class="mb-3">Bidang Sumber Daya Kesehatan</h4>

                    <a class="btn btn-lg btn-primary rounded" href="/bidang/sumber-daya">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-search text-white"></i>
                    </div>
                    <h4 class="mb-3">PPID</h4>

                    <a class="btn btn-lg btn-primary rounded" href="http://ppid.dinkes.jatimprov.go.id/">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <!-- Service End -->

    <!-- Quote Start -->
    <div class="container-fluid py-55 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-55">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Public Corner</h5>
                    </div>
                    <div class="row gx-3">
                        <div class="boxpd1" onclick="location.href='#';" style="cursor: pointer;">
                            @foreach ($publiccorner as $item)
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title"><b>{{ $item->nama }} </b>| Updated
                                            {{ \Carbon\Carbon::parse($item->updated_at)->diffForHumans() }}</div>
                                        <p class="card-text">Pertanyaan : {{ $item->pertanyaan }}</p>
                                        <p class="card-text">Jawaban : {{ $item->jawaban }}</p>
                                        <a href="/public-corner/{{ $item->id }}/view" class="card-link">Baca
                                            Selengkapnya..</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <br>
                    <a href="/public-corner"><input class="btn btn-primary" type="submit" value="Kirim Pertanyaan"></a>
                    <a href="publicCorner"><input class="btn btn-primary" type="reset" value="Lihat Selengkapnya"></a>
                </div>
                <div class="col-lg-5">
                    <div class="section-title text-left position-relative pb-3 mb-5 mx-auto" ;>
                        <h5 class="fw-bold text-primary text-uppercase">Cacak Jatim</h5>
                    </div>
                    <img class="imgcc" src="img/CACAK.jpeg" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->

    <div class="container py-55">
        <iframe class="video" src="https://www.youtube.com/embed/yLvsSSliFec">
        </iframe>
    </div>
@endsection
