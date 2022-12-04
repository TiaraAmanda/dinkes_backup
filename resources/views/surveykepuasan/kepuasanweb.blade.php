@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
            {{-- start --}}
            <div class="container">
                <div class="alert alert-warning mb-4" role="alert">
                    Perhatian!! untuk memberikan penilaian/poling/suara silahkan klik Icon/Emoji
                </div>
                <div class="row">
                    @foreach ($kepuasanweb as $item)
                        {{-- <form action="/puas/kirim" method="POST"> --}}
                        @csrf
                        <div class="col-md-4">
                            <center>
                                <div class="bg-success box text-white py-2">
                                    <div class="col-md-6 mb-2">
                                        <a href="/addkepuasan"
                                            title="Jika anda merasa Kurang dengan Pelayanan Kami, Klik Icon Ini">
                                            <img src="icon/puas.png" style="width: 100px ">
                                        </a>
                                    </div>
                                    <p class="card-text">
                                        Memuaskan<br>[ {{ $item->puas + $loop->iteration }} ]<br>Suara</p>
                                </div>
                            </center>
                        </div>
                        {{-- </form> --}}

                        <div class="col-md-4">
                            <center>
                                <div class="bg-primary box text-white py-2">
                                    <div class="col-md-6 mb-2">
                                        <a href="simpan.php?ket=kurang"
                                            title="Jika anda merasa Kurang dengan Pelayanan Kami, Klik Icon Ini">
                                            <img src="icon/cukup.png" style="width: 100px ">
                                        </a>
                                    </div>
                                    <p class="card-text">
                                        Cukup<br>[ {{ $item->cukup }} ]<br>Suara</p>
                                </div>
                            </center>
                        </div>

                        <div class="col-md-4">
                            <center>
                                <div class="bg-danger box text-white py-2">
                                    <div class="col-md-6 mb-2">
                                        <a href="simpan.php?ket=kurang"
                                            title="Jika anda merasa Kurang dengan Pelayanan Kami, Klik Icon Ini">
                                            <img src="icon/kurang.png" style="width: 100px ">
                                        </a>
                                    </div>
                                    <p class="card-text">
                                        Kurang<br>[ {{ $item->kurang }} ]<br>Suara</p>
                                </div>
                            </center>
                        </div>
                    @endforeach
                </div>

                <form action="/kepuasanweb/kirim" method="POST">
                    @csrf
                    <div class="mt-5 alert alert-warning mb-4" role="alert">
                        Perhatian!! Anda bisa mengisi form Saran Pengembangan apabila terdapat kebutuhan layanan baru atau
                        memperbaiki layanan yang sudah ada
                    </div>
                    @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="my-3">
                        <label for="kebutuhan" class="form-label">Saran Pengembangan</label>
                        <textarea class="form-control" id="kebutuhan" name="kebutuhan" rows="3"></textarea>
                    </div>
                    <br>
                    <button class="btn btn-primary mb-5">Kirim</button>
                </form>
            </div>
            {{-- end --}}
        </div>
        @include('partials.sidebar')
    </div>
@endsection
