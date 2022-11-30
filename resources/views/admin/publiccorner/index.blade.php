@extends('admin.layout.main')

@section('page-header')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Public Corner</h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Halaman Public Corner</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width: 20px;">No.</th>
                                            <th scope="col" style="width: 20px;">ID Pertanyaan</th>
                                            <th scope="col">Nama</th>
                                            {{-- <th scope="col">Email</th> --}}
                                            <th scope="col">No. Telepon</th>
                                            <th scope="col">Pertanyaan</th>
                                            <th scope="col">Jawaban</th>
                                            <th scope="col">Data Masuk</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($public_corner as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->nama }}</td>
                                                {{-- <td>{{ $item->email }}</td> --}}
                                                <td>{{ $item->notelp }}</td>
                                                <td>{{ $item->pertanyaan }}</td>
                                                <td>{{ $item->jawaban }}</td>
                                                <td>{{ $item->created_at->diffForHumans() }}</td>
                                                <td>
                                                    <a href="/admin/public-corner/{{ $item->id }}/edit">Jawab</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            {{-- <form action="/profilpejabat/updatebidangkesma" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="detail_jabatan">ID Pertanyaan</label>
                                    <input class="form-control" type="text" placeholder="Nama"
                                        name="detail_jabatan" id="detail_jabatan">
                                </div>

                                <div class="form-group">

                                    <div class="mb-3">
                                        <label for="jawaban" class="form-label">Jawaban</label>
                                        <textarea class="form-control" id="jawaban" name="jawaban" rows="3"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                    <button class="btn btn-danger">Batal</button>
                                </div>

                            </form> --}}
                        </div>

                            {{-- @if (empty($public_corner[0]))
                                <div class="col-md-6 col-lg-12">
                                    <form action="/profilpejabat/createbidangkesma" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="detail_jabatan">Detail Jabatan</label>
                                            <input class="form-control" type="text" placeholder="Nama"
                                                name="detail_jabatan" id="detail_jabatan">
                                        </div>

                                        <div class="form-group">
                                            <input id="pejabat_id" name="pejabat_id" type="text"
                                                value="{{ $pejabat[2]->id }}" hidden>
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
                            @else
                                <div class="col-md-6 col-lg-12">
                                    <a href="/profilpejabat/tambahbidangkesma" class="btn btn-primary">Tambah Profil Pejabat Bidang Kesehatan Masyarakat</a>


                                </div>
                            @endif --}}
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


