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
                        <div class="card-title">Edit Kepala Dinas Kesehatan</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @if (empty($kadinkes[0]))
                                <div class="col-md-6 col-lg-12">
                                    <form action="/profilpejabat/createkepaladinkes" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <input id="pejabat_id" name="pejabat_id" type="text"
                                                value="{{ $pejabat[0]->id }}" hidden>
                                            <label for="nama">Nama</label>
                                            <input class="form-control" type="text" placeholder="Nama" name="nama"
                                                id="nama">
                                        </div>
                                        <div class="form-group">
                                            <label for="detail_jabatan">Detail Jabatan</label>
                                            <input class="form-control" type="text" placeholder="Detail Jabatan"
                                                name="detail_jabatan" id="detail_jabatan">
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
                                    <form action="/profilpejabat/updatekepaladinkes" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @foreach ($kadinkes as $item)
                                            <div class="form-group">
                                                <label for="nama">Nama</label>
                                                <input class="form-control" type="text" placeholder="Nama" name="nama"
                                                    id="nama" value="{{ $item->nama }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="detail_jabatan">Detail Jabatan</label>
                                                <input class="form-control" type="text" placeholder="Detail Jabatan"
                                                    name="detail_jabatan" id="detail_jabatan"
                                                    value="{{ $item->detail_jabatan }}">
                                            </div>

                                            <div class="form-group">
                                                <div class="mb-3">
                                                    <label for="image" class="form-label">Foto</label>
                                                    <input type="hidden" name="oldImage" value="{{ $item->image }}">
                                                    @if ($item->image)
                                                        <img src="{{ asset('storage/' . $item->image) }}"
                                                            class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                                    @else
                                                        <img class="img-preview img-fluid mb-3 col-sm-5">
                                                    @endif
                                                    <input class="form-control" type="file" id="image" name="image"
                                                        onchange="previewImage()">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <button class="btn btn-primary" type="submit">Simpan</button>
                                                <button class="btn btn-danger">Batal</button>
                                            </div>
                                        @endforeach
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
