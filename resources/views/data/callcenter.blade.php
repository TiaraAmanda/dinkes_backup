@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
            <div class="position-relative h-150">
                <div class="container">
                    <h4 class="mb-4"> {{ $title }}</h4>

                    <img class="w-75 h-200 mb-4 rounded wow zoomIn" data-wow-delay="0.9s" src="/img/callcenter/malang.jpeg"
                        style="object-fit: cover;">
                    <img class="w-75 h-200 mb-4 rounded wow zoomIn" data-wow-delay="0.9s"
                        src="/img/callcenter/bojonegoro.jpeg" style="object-fit: cover;">
                    <img class="w-75 h-200 mb-4 rounded wow zoomIn" data-wow-delay="0.9s" src="/img/callcenter/madiun.jpeg"
                        style="object-fit: cover;">
                    <img class="w-75 h-200 mb-4 rounded wow zoomIn" data-wow-delay="0.9s"
                        src="/img/callcenter/pamekasan.jpeg" style="object-fit: cover;">
                    <img class="w-75 h-200 mb-4 rounded wow zoomIn" data-wow-delay="0.9s" src="/img/callcenter/jember.jpeg"
                        style="object-fit: cover;">

                </div>
            </div>
        </div>
        @include('partials.sidebar')
    </div>
@endsection
