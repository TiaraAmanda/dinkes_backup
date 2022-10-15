@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
            <div class="section-title text-center position-relative pb-3" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Penghargaan</h5>
            </div>
            <div class="row g-5 position-relative h-150 d-inline">
                <img class="w-75 h-200 mb-4 rounded wow zoomIn" data-wow-delay="0.9s" src="/img/penghargaan/p-laki.jpeg"
                    style="object-fit: cover;">
                <img class="w-75 h-200 mb-4 rounded wow zoomIn" data-wow-delay="0.9s" src="/img/penghargaan/p-profil.jpeg"
                    style="object-fit: cover;">
                <img class="w-75 h-200 mb-4 rounded wow zoomIn" data-wow-delay="0.9s" src="/img/penghargaan/p-ppid.jpeg"
                    style="object-fit: cover;">
            </div>
        </div>
        @include('partials.sidebar')
    </div>
@endsection
