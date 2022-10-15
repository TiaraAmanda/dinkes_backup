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
                        <div class="card-title">Jawab Pertanyaan</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <form action="/admin/public-corner/{{ $public_corner->id }}}/update" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama">Nama Pengirim Pertanyaan</label>
                                        <input class="form-control" type="text" placeholder="nama" name="nama"
                                            id="nama" value="{{ $public_corner->nama }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="notelp">No. Telepon Pengirim Pertanyaan</label>
                                        <input class="form-control" type="text" placeholder="notelp" name="notelp"
                                            id="notelp" value="{{ $public_corner->notelp }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat Pengirim Pertanyaan</label>
                                        <input class="form-control" type="text" placeholder="alamat" name="alamat"
                                            id="alamat" value="{{ $public_corner->alamat }}" disabled>
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="pertanyaan" class="form-label">Pertanyaan</label>
                                            <textarea class="form-control" id="pertanyaan" name="pertanyaan" rows="3" disabled>{{ $public_corner->pertanyaan }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="jawaban" class="form-label">Jawaban</label>
                                            <textarea class="form-control" id="jawaban" name="jawaban" rows="3"></textarea>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="tampil">Tampilkan Pada Halaman Public Corner</label>
                                        <select class="form-control form-control-sm" name="tampil" id="tampil">
                                                <option value="1">Tampilkan</option>
                                                <option value="2">Tidak</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                        <button class="btn btn-danger">Batal</button>
                                    </div>
                                </form>
                            </div>
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
