@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
            <div class="dateupdate" style="margin-bottom: 1rem;">Diperbarui Pada
                {{ \Carbon\Carbon::parse($institusi_tujuan[0]->updated_at)->diffForHumans() }}</div>
            <div class="position-relative h-150">
                <p>{!! $institusi_tujuan[0]->body !!}</p>
            </div>
        </div>
        @include('partials.sidebar')
    </div>
@endsection
