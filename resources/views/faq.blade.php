@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
            <div class="position-relative h-150">
                <div class="container">
                    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                        <h5 class="fw-bold text-primary text-uppercase">FAQ</h5>
                    </div>
                    <div class="card2 mb-3">
                        <div class="card2-header">
                            <a class="card2-link" data-toggle="collapse" href="#menuone" aria-expanded="false"
                                aria-controls="menuone">
                                Apakah Coronavirus dan COVID-19 itu?
                            </a>
                        </div>
                        <div id="menuone" class="collapse">
                            <div class="card2-body">
                                <p>Coronavirus merupakan keluarga besar virus yang menyebabkan penyakit pada manusia dan
                                    hewan. Pada manusia biasanya menyebabkan penyakit infeksi saluran pernapasan, mulai flu
                                    biasa hingga penyakit yang serius seperti Middle East Respiratory Syndrome (MERS) dan
                                    Sindrom Pernafasan Akut Berat/ Severe Acute Respiratory Syndrome (SARS). Coronavirus
                                    jenis baru yang ditemukan pada manusia sejak kejadian luar biasa muncul di Wuhan Cina,
                                    pada Desember 2019, kemudian diberi nama Severe Acute Respiratory Syndrome Coronavirus 2
                                    (SARS-COV2), dan menyebabkan penyakit Coronavirus Disease-2019 (COVID-19).</p>
                            </div>
                        </div>
                    </div>
                    <div class="card2 mb-3">
                        <div class="card2-header">
                            <a class="card2-link" data-toggle="collapse" href="#menu2" aria-expanded="false"
                                aria-controls="menu2">
                                Apakah Coronavirus dan COVID-19 itu?
                            </a>
                        </div>
                        <div id="menu2" class="collapse">
                            <div class="card2-body">
                                <p>Coronavirus merupakan keluarga besar virus yang menyebabkan penyakit pada manusia dan
                                    hewan. Pada manusia biasanya menyebabkan penyakit infeksi saluran pernapasan, mulai flu
                                    biasa hingga penyakit yang serius seperti Middle East Respiratory Syndrome (MERS) dan
                                    Sindrom Pernafasan Akut Berat/ Severe Acute Respiratory Syndrome (SARS). Coronavirus
                                    jenis baru yang ditemukan pada manusia sejak kejadian luar biasa muncul di Wuhan Cina,
                                    pada Desember 2019, kemudian diberi nama Severe Acute Respiratory Syndrome Coronavirus 2
                                    (SARS-COV2), dan menyebabkan penyakit Coronavirus Disease-2019 (COVID-19).</p>
                            </div>
                        </div>
                    </div>
                    <div class="card2 mb-3">
                        <div class="card2-header">
                            <a class="card2-link" data-toggle="collapse" href="#menu3" aria-expanded="false"
                                aria-controls="menu3">
                                Apakah Coronavirus dan COVID-19 itu?
                            </a>
                        </div>
                        <div id="menu3" class="collapse">
                            <div class="card2-body">
                                <p>Coronavirus merupakan keluarga besar virus yang menyebabkan penyakit pada manusia dan
                                    hewan. Pada manusia biasanya menyebabkan penyakit infeksi saluran pernapasan, mulai flu
                                    biasa hingga penyakit yang serius seperti Middle East Respiratory Syndrome (MERS) dan
                                    Sindrom Pernafasan Akut Berat/ Severe Acute Respiratory Syndrome (SARS). Coronavirus
                                    jenis baru yang ditemukan pada manusia sejak kejadian luar biasa muncul di Wuhan Cina,
                                    pada Desember 2019, kemudian diberi nama Severe Acute Respiratory Syndrome Coronavirus 2
                                    (SARS-COV2), dan menyebabkan penyakit Coronavirus Disease-2019 (COVID-19).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.sidebar')
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
@endsection
