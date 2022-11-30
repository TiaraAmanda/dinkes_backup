@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
            <center>
                <div class="position-relative h-150">
                    <h5>{{ $kadinkes[0]->detail_jabatan }}</h5>
                    <p>{{ $kadinkes[0]->nama }}</p>
                    <img class="w-25 h-200 rounded wow zoomIn" data-wow-delay="0.9s" src="/storage/{{ $kadinkes[0]->image }}"
                        style="object-fit: cover;">
                </div>
            </center>
            <h4 class="mt-5 mb-3" style="text-align: center;">Sekretariat</h4>
            <div class="row g-5">
                @foreach ($sekretariat as $item)
                    <div class="col-lg-3 col-md-4 wow zoomIn" data-wow-delay="0.3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                        <img class="w-100 h-200 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="/storage/{{ $item->image }}" style="object-fit: cover;">
                        <center>
                            <h6 class="mb-3 mt-3">{{ $item->detail_jabatan }}</h6>
                            <p class="m-0">{{ $item->nama }}</p>
                        </center>
                    </div>
                @endforeach
            </div>
            <h4 class="mt-5 mb-3" style="text-align: center;">Bidang Kesehatan Masyarakat</h4>
            <div class="row g-5">
                @foreach ($bidkesma as $item)
                    <div class="col-lg-3 col-md-4 wow zoomIn" data-wow-delay="0.3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                        <img class="w-100 h-200 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="/storage/{{ $item->image }}" style="object-fit: cover;">
                        <center>
                            <h6 class="mb-3 mt-3">{{ $item->detail_jabatan }}</h6>
                            <p class="m-0">{{ $item->nama }}</p>
                        </center>
                    </div>
                @endforeach
            </div>
            <h4 class="mt-5 mb-3" style="text-align: center;">Bidang Pengegahan dan Pengendalian Penyakit</h4>
            <div class="row g-5">
                @foreach ($bppp as $item)
                    <div class="col-lg-3 col-md-4 wow zoomIn" data-wow-delay="0.3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                        <img class="w-100 h-200 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="/storage/{{ $item->image }}" style="object-fit: cover;">
                        <center>
                            <h6 class="mb-3 mt-3">{{ $item->detail_jabatan }}</h6>
                            <p class="m-0">{{ $item->nama }}</p>
                        </center>
                    </div>
                @endforeach
            </div>
            <h4 class="mt-5 mb-3" style="text-align: center;">Bidang Pelayanan Kesehatan</h4>
            <div class="row g-5">
                @foreach ($bpk as $item)
                    <div class="col-lg-3 col-md-4 wow zoomIn" data-wow-delay="0.3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                        <img class="w-100 h-200 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="/storage/{{ $item->image }}" style="object-fit: cover;">
                        <center>
                            <h6 class="mb-3 mt-3">{{ $item->detail_jabatan }}</h6>
                            <p class="m-0">{{ $item->nama }}</p>
                        </center>
                    </div>
                @endforeach
            </div>
            <h4 class="mt-5 mb-3" style="text-align: center;">Bidang Sumber Daya Kesehatan</h4>
            <div class="row g-5">
                @foreach ($bsdk as $item)
                    <div class="col-lg-3 col-md-4 wow zoomIn" data-wow-delay="0.3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                        <img class="w-100 h-200 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="/storage/{{ $item->image }}" style="object-fit: cover;">
                        <center>
                            <h6 class="mb-3 mt-3">{{ $item->detail_jabatan }}</h6>
                            <p class="m-0">{{ $item->nama }}</p>
                        </center>
                    </div>
                @endforeach
            </div>
            <br>
        </div>
        @include('partials.sidebar')
    </div>
@endsection
