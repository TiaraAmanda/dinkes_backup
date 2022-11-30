@extends('admin.layout.main')

@section('page-header')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Konfigurasi</h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Halaman Konfigurasi Sosial Media</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            {{-- @if (empty($bidangpk[0]))
                                <div class="col-md-6 col-lg-12">
                                    <form action="/profilpejabat/createbidangpk" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="detail_jabatan">Detail Jabatan</label>
                                            <input class="form-control" type="text" placeholder="Nama"
                                                name="detail_jabatan" id="detail_jabatan">
                                        </div>

                                        <div class="form-group">
                                            <input id="pejabat_id" name="pejabat_id" type="text"
                                                value="{{ $pejabat[4]->id }}" hidden>
                                            <label for="nama">Nama</label>
                                            <input class="form-control" type="text" placeholder="Nama" name="nama"
                                                id="nama">
                                        </div>

                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Foto</label>
                                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                                <input class="form-control" type="file" id="image" name="image"
                                                    onchange="previewImage()">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">Simpan</button>
                                            <button class="btn btn-danger">Batal</button>
                                        </div>
                                    </form>
                                </div>
                            @else --}}
                            <div class="col-md-6 col-lg-12">
                                {{-- <a href="/profilpejabat/tambahbidangpk" class="btn btn-primary">Tambah Data Sosial Media</a> --}}

                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="width: 20px;">No.</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Hyperlink</th>
                                                {{-- <th scope="col">Urutan</th> --}}
                                                <th scope="col" style="width: 20px;">Action</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($sosial_media as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->nama_sosial_media }}</td>
                                                    <td>{{ $item->hyperlink }}</td>
                                                    <td>
                                                        <form action="/konfig/sm/{{ $item->id }}/hapus"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            <button class="btn btn-danger">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <form action="/konfig/createsm" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama_sosial_media">Nama Sosial Media</label>
                                        <input class="form-control" type="text" placeholder="Nama"
                                            name="nama_sosial_media" id="nama_sosial_media">
                                    </div>

                                    <div class="form-group">
                                        <label for="hyperlink">Hyperlink</label>
                                        <input class="form-control" type="text" placeholder="hyperlink" name="hyperlink"
                                            id="hyperlink">
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Logo</label>
                                            <img class="img-preview img-fluid mb-3 col-sm-5">
                                            <input class="form-control" type="file" id="image" name="image"
                                                onchange="previewImage()">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                        <button class="btn btn-danger">Batal</button>
                                    </div>

                                </form>
                            </div>
                            {{-- @endif --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
