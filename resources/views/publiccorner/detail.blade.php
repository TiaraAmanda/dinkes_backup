@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
            <div class="dateupdate" style="margin-bottom: 1rem;"></div>
            <div class="position-relative h-150">
                <h3 class="mb-5">Detail Pertanyaan</h3>
                <div class="card ">
                    <div class="card-body">
                        <h6 class="card-title"><b>{{ $public_corner->nama }} </b>| Updated
                            {{ \Carbon\Carbon::parse($public_corner->updated_at)->diffForHumans() }}</h6>
                        <div class="dropdown-divider"></div>
                        <p class="card-text"><b>Pertanyaan : </b> {{ $public_corner->pertanyaan }}</p>
                        <p class="card-text mt-3"><b>Jawaban : </b>{{ $public_corner->jawaban }}</p>
                        <a href="/public-corner/semua">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.sidebar')
    </div>
@endsection
