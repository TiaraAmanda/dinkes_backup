@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
            <div class="position-relative h-150">
                <h3 class="mb-5">Semua Pertanyaan</h3>
                @foreach ($publiccorner as $item)
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title"><b>{{ $item->nama }} </b>| Updated
                                {{ \Carbon\Carbon::parse($item->updated_at)->diffForHumans() }}</div>
                            <p class="card-text">Pertanyaan : {{ $item->pertanyaan }}</p>
                            <p class="card-text">Jawaban : {{ $item->jawaban }}</p>
                            <a href="/public-corner/{{ $item->id }}/view" class="card-link">Baca Selengkapnya..</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @include('partials.sidebar')
    </div>
@endsection
