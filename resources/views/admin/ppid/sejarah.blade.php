@extends('admin.layout.main')

@section('page-header')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">PPID</h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Halaman Sejarah</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @if (empty($sejarah[0]))
                            <div class="col-md-6 col-lg-12">
                                <form action="/ppid/sejarah/halamanSejarah" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="kategori" id="kategori" value="sejarah" hidden>
                                        <label for="judul">Judul</label>
                                        <input class="form-control" type="text" placeholder="Judul" name="judul"
                                            id="judul">
                                    </div>

                                    <div class="form-group">
                                        <label for="slug" class="form-label">Slug</label>
                                        <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug" required
                                            value="{{ old('slug') }}" placeholder="slug-url">
                                        @error('slug')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Sertakan Gambar untuk Headline
                                                Berita</label>
                                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                            <input class="form-control" type="file" id="image" name="image"
                                                onchange="previewImage()">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="body">Isi</label>
                                        <input id="body" type="hidden" name="body">
                                        <trix-editor input="body"></trix-editor>
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

                            @else


                            <div class="col-md-6 col-lg-12">
                                <form action="/ppid/updatesejarah" method="POST"
                                    enctype="multipart/form-data">
                                    {{-- @method('put') --}}
                                    @csrf
                                    @foreach ($sejarah as $item)
                                        <div class="form-group">
                                            <input type="text" name="kategori" id="kategori" value="sejarah" hidden>
                                            <label for="judul">Judul</label>
                                            <input class="form-control" type="text" placeholder="Judul" name="judul"
                                                id="judul" value="{{ $item->judul }}">
                                        </div>

                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Sertakan Gambar untuk Headline
                                                    Berita</label>
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
                                            <label for="body" class="form-label">Isi</label>
                                            @if ($item->body)
                                            <input id="body" type="hidden" name="body" value="{{ old('body', $item->body) }}">
                                            @else
                                            <input id="body" type="hidden" name="body">
                                            @endif
                                            <trix-editor input="body"></trix-editor>
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
        const judul = document.querySelector('#judul');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/ppid/checkSlug?judul=' + judul.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

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
