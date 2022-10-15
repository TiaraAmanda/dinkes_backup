@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
            <div class="position-relative h-150">
                <div class="container">
                    <h4 class="mb-4"> {{ $title }}</h4>
                    <div class="card mb-2">
                        <div class="card-body">
                            <h6 class="card-title">LPSE Provinsi Jawa Timur</h6>
                            <a href="https://lpse.jatimprov.go.id/eproc4" class="card-link">Kunjungi situs</a>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body">
                            <h6 class="card-title">RUP Dinas Kesehatan Provinsi Jawa Timur</h6>
                            <a href="https://sirup.lkpp.go.id/sirup/ro/penyedia/satker/67302" class="card-link">Kunjungi
                                situs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.sidebar')
    </div>
@endsection
