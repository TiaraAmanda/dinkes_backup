@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
            <div class="position-relative h-150">
                <div class="container">
                    <h4 class="mb-4"> {{ $title }}</h4>

                </div>
            </div>
        </div>
        @include('partials.sidebar')
    </div>
@endsection
