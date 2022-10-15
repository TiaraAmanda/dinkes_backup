@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
            <div class="position-relative h-150">
                <div class="container">
                    <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                        <h5 class="fw-bold text-primary text-uppercase">Dinas Kesehatan Kabupaten Kota</h5>
                    </div>
                    @foreach ($web as $item)
                        <div class="card">
                            <div class="card-body">
                                <a href="{{ $item->tautan }}"> {{ $item->kabkota }}</a>
                            </div>
                        </div>
                    @endforeach
                    <div class="d-flex justify-content-center mt-4">
                        {{ $web->links() }}
                    </div>
                    <br>
                </div>
            </div>
        </div>
        @include('partials.sidebar')
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
@endsection
