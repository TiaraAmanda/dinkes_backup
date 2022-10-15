@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
            <div class="position-relative h-150">
                <div class="container">
                    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                        <h5 class="fw-bold text-primary text-uppercase">UPT Dinas Kesehatan</h5>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="http://rsumohammadnoer.jatimprov.go.id/">RS Mohamad Noer Pamekasan</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="http://rspmanguharjo.jatimprov.go.id/">RS Manguharjo Madiun</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="http://rssumberglagah.jatimprov.go.id/">RS Sumberglagah Mojokerto</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="http://materiamedicabatu.jatimprov.go.id/">Materia Medica Batu</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="http://www.jemberkab.go.id/rs-paru-jember/">RS Paru Jember</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="http://etreg.murnajati.jatimprov.go.id/">Latkesmas Murnajati Lawang</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="http://akpermadiun.ac.id/web1/">Akademi Perawat Madiun</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="http://rsparudungus.jatimprov.go.id/#">RS Paru Dungus Madiun</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="http://www.akademigizisurabaya.ac.id/">Akademi Gizi Surabaya</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="http://rsmm.jatimprov.go.id/">RS Mata Masyarakat Jawa Timur</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="http://rskustakediri.jatimprov.go.id/">RS Kusta Kediri</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="http://rsparusby.jatimprov.go.id/">RS Paru Surabaya</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="http://rsukarsahusadabatu.jatimprov.go.id/">RSU Karsa Husada Batu</a>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        @include('partials.sidebar')
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
@endsection
