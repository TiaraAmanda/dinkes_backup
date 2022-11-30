@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
            <div class="position-relative h-150 mb-5">
                <h4 class="mb-2">{{ $post->judul }}</h4>
                <p>{{ $post->bidang->nama_bidang }} | Updated at
                    {{ \Carbon\Carbon::parse($post->updated_at)->diffForHumans() }}</p>
                <img src="/storage/{{ $post->image }}" alt="" class="img-fluid" style="max-height: 500px;">
                <p>{!! $post->body !!}</p>
            </div>

            <div>
                <section id="comment">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->content }}</p>
                    <hr>
                    <h5 class="col-lg-7 mt-5">Komentar</h5>
                    {{-- <div class="col-md-6"> --}}
                    <form action="{{ url('/comment') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $post->id }}" class="form-control">
                        <input type="hidden" name="parent_id" id="parent_id" class="form-control">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" class="form-control" name="username">
                            <p class="text-danger">{{ $errors->first('username') }}</p>
                        </div>
                        <div class="form-group" style="display: none" id="formReplyComment">
                            <label for="">Balas Komentar</label>
                            <input type="text" id="replyComment" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Komentar</label>
                            <textarea name="comment" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <button class="my-3 btn btn-primary btn-sm">Kirim</button>
                    </form>
                </section>

                {{-- </div> --}}

                @foreach ($post->comments as $row)
                    <blockquote class="card p-3 my-2 ">
                        <h6 class="h7 fw-semi-bold d-flex align-items-center">{{ $row->username }}
                        </h6>
                        {{-- <hr> --}}
                        <p class="h7 fw-regular d-flex align-items-center">{{ $row->comment }}</p>
                        <a href="#comment" {{-- javascript:void(0) --}}
                            onclick="balasKomentar({{ $row->id }}, '{{ $row->comment }}')">Balas</a>
                    </blockquote>

                    @foreach ($row->child as $val)
                        <div class="hild-comment">
                            <blockquote class="card p-3 my-3 ms-5">
                                <h6 class="h7 fw-semi-bold d-flex align-items-center">{{ $val->username }}</h6>
                                <p class="h7 fw-regular d-flex align-items-center">{{ $val->comment }}</p>
                            </blockquote>
                        </div>
                    @endforeach
                @endforeach

            </div>
        </div>

        @include('partials.sidebar')
    </div>
@endsection
