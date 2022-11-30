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
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="row">
                                @foreach ($posts as $row)
                                    <div class="col-md-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5><a href="{{ url('/' . $row->slug) }}"
                                                        style="text-decoration: none">{{ \Str::limit($row->title, 100) }}</a>
                                                </h5>
                                                <p>{!! $row->content !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.sidebar')
    </div>
@endsection
