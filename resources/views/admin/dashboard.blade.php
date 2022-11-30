@extends('admin.layout.main')

@section('page-header')
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-dark pb-2 fw-bold">Dashboard</h2>
                <h4 class="text-dark op-7 mb-2">Selamat Datang, {{ auth()->user()->nama }}</h4>
            </div>
        </div>
    </div>
@endsection
