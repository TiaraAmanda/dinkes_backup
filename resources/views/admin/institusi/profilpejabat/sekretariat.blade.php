@extends('admin.layout.main')

@section('page-header')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Profil Pejabat</h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Halaman Bagian Sekretariat</div>
                    </div>
                    <div class="card-body">
                        <a href="/profilpejabat/tambahsekretariat" class="btn btn-primary">Tambah Profil Pejabat Sekretariat</a>
                        <div class="row">
                            @if (empty($sekretariat[0]))
                                <div class="col-md-6 col-lg-12">
                                    <form action="/profilpejabat/createsekretariat" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="detail_jabatan">Detail Jabatan</label>
                                            <input class="form-control" type="text" placeholder="Nama"
                                                name="detail_jabatan" id="detail_jabatan">
                                        </div>

                                        <div class="form-group">
                                            <input id="pejabat_id" name="pejabat_id" type="text"
                                                value="{{ $pejabat[1]->id }}" hidden>
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
                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width: 20px;">No.</th>
                                                    <th scope="col">Detail Jabatan</th>
                                                    <th scope="col">Nama Yang Sudah Ada</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($sekretariat as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $item->detail_jabatan }}</td>
                                                        <td>{{ $item->nama }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <form action="/profilpejabat/updatesekretariat" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="detail_jabatan">Detail Jabatan</label>
                                            <input class="form-control" type="text" placeholder="Nama"
                                                name="detail_jabatan" id="detail_jabatan">
                                        </div>

                                        <div class="form-group">
                                            <input id="pejabat_id" name="pejabat_id" type="text"
                                                value="{{ $pejabat[1]->id }}" hidden>
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
                            @endif
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
