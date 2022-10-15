@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
            <div class="position-relative h-150">
                <h4 class="mb-2">{{ $post->judul }}</h4>
                <p>{{ $post->bidang->nama_bidang }} | Updated at
                    {{ \Carbon\Carbon::parse($post->updated_at)->diffForHumans() }}</p>
                <img src="/storage/{{ $post->image }}" alt="" class="img-fluid" style="max-height: 500px;">
                <p>{!! $post->body !!}</p>
            </div>
        </div>
        @include('partials.sidebar')
    </div>
@endsection
