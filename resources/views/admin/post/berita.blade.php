@extends('admin.layout.main')

@section('page-header')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Data</h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Halaman Berita</div>
                    </div>
                    <div class="card-body">
                        @if (session()->has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <a href="/data/tambahberita" class="btn btn-primary">Tambah Berita</a>
                        <div class="row">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 20px;">No.</th>
                                        <th style="width: 350px;">Judul</th>
                                        <th scope="col">Date Add</th>
                                        <th scope="col" style="width: 20px;">Headline</th>
                                        <th scope="col">Bidang</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($post as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->judul }}</td>
                                            <td>{{ $item->created_at->diffForHumans() }}</td>
                                            <td>{{ $item->tampil_headline }}</td>
                                            <td>{{ $item->bidang->nama_bidang }}</td>
                                            <td>
                                                <a href="/data/berita/{{ $item->id }}/edit"
                                                    class="btn btn-primary">Edit</a>
                                                <form action="/data/berita/{{ $item->id }}/hapus" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    <button class="btn btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
