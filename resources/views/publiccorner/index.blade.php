@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
            <div class="dateupdate" style="margin-bottom: 1rem;"></div>
            <div class="position-relative h-150">
                @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif
                <h3 class="mb-4">Kirim Pertanyaan</h3>
                <form action="/public-corner/kirimpertanyaan" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            placeholder="Masukkan nama">
                    </div>
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email"
                            placeholder="Masukkan email">
                    </div>
                    <div class="mb-3">
                        <label for="notelp" class="form-label">No. Telp</label>
                        <input type="text" class="form-control" id="notelp" name="notelp"
                            placeholder="Masukkan nomor telepon">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat"
                            placeholder="Masukkan alamat">
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="l" name="jenis_kelamin"
                                id="jenis_kelamin">
                            <label class="form-check-label" for="jenis_kelamin">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="p" name="jenis_kelamin"
                                id="jenis_kelamin">
                            <label class="form-check-label" for="jenis_kelamin">
                                Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="pekerjaan" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan"
                            placeholder="Masukkan pekerjaan">
                    </div>
                    <div class="mb-3">
                        <label for="pertanyaan" class="form-label">Pertanyaan</label>
                        <textarea class="form-control" id="pertanyaan" name="pertanyaan" rows="3"></textarea>
                    </div>
                    <button class="btn btn-primary mb-4">Kirim Pertanyaan</button>
                </form>
            </div>
        </div>
        @include('partials.sidebar')
    </div>
@endsection
