@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
            <div class="position-relative h-150">
                <h4 class="mb-4">Halaman : {{ $title }}</h4>
                @foreach ($sekretariat as $item)
                    <div class="card mb-3" style="max-width: 650px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/storage/{{ $item->image }}" class="img-fluid rounded-start" alt="..."
                                    style="height: auto; width: 300px;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">

                                    <a href="">
                                        <h6 class="card-title mb-3">{{ $item->judul }}</h6>
                                    </a>
                                    <p><small class="text-muted">Updated at
                                            {{ \Carbon\Carbon::parse($item->updated_at)->diffForHumans() }} | <a
                                                href="/{{ $item->slug }}"> Baca Selengkapnya..</a></small>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center mt-4">
                    {{ $sekretariat->links() }}
                </div>
            </div>
        </div>
        @include('partials.sidebar')
    </div>
@endsection
