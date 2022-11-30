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
                        <div class="card-title">Edit Artikel</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <form action="/data/artikel/{{ $post->id }}}/update" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                        <div class="form-group">
                                            <input type="text" name="kategori_post" id="kategori_post" value="artikel"
                                                hidden>
                                            <label for="judul">Judul</label>
                                            <input class="form-control" type="text" placeholder="Judul" name="judul"
                                                id="judul" value="{{ $post->judul }}">
                                        </div>

                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="slug" class="form-label">Slug</label>
                                                <input class="form-control" type="text" id="slug" name="slug"
                                                    placeholder="slug" value="{{ $post->slug }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Sertakan Gambar untuk Headline
                                                    Berita</label>
                                                <input type="hidden" name="oldImage" value="{{ $post->image }}">
                                                @if ($post->image)
                                                    <img src="{{ asset('storage/' . $post->image) }}"
                                                        class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                                @else
                                                    <img class="img-preview img-fluid mb-3 col-sm-5">
                                                @endif
                                                <input class="form-control" type="file" id="image" name="image"
                                                    onchange="previewImage()">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="body" class="form-label">Isi</label>
                                            @if ($post->body)
                                            <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                                            @else
                                            <input id="body" type="hidden" name="body">
                                            @endif
                                            <trix-editor input="body"></trix-editor>
                                        </div>

                                        <div class="form-group">
                                            <label for="tampil_headline">Pilih Untuk Dijadikan Headline </label>
                                            <select class="form-control form-control-sm" name="tampil_headline" id="tampil_headline">
                                                    <option value="1">Berita</option>
                                                    <option value="2">Headline</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="smallSelect">Bidang</label>
                                            <select class="form-control form-control-sm" name="bidang_id">
                                                @foreach ($bidang as $b)
                                                    <option value="{{ $b->id }}">{{ $b->nama_bidang }}</option>
                                                @endforeach
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
