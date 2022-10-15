@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
            <div class="position-relative h-150">
                <div class="container">
                    <h4 class="mb-4">Data {{ $title }}</h4>
                    @foreach ($pdi as $item)
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">{{ $item->nama_file }}</div>
                                        Updated at {{ \Carbon\Carbon::parse($item->updated_at)->diffForHumans() }}
                                    </div>
                                    <a href="/storage/{{ $item->data_file }}" target="_blank" rel="noopener"
                                        class="btn btn-primary btn-lg"><i class="fa fa-download" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        @include('partials.sidebar')
    </div>
@endsection
