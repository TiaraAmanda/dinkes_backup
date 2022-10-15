@extends('admin.layout.main')

@section('page-header')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Daftar Informasi Publik</h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Edit Data Daftar Informasi Publik</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <form action="/ppid/dip/{{ $ppid->id }}}/update" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="kategori" id="kategori" value="daftar informasi publik"
                                            hidden>
                                        <label for="judul">Judul</label>
                                        <input class="form-control" type="text" placeholder="Judul" name="judul"
                                            id="judul" value="{{ $ppid->judul }}">
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Sertakan Gambar untuk Headline
                                                Berita</label>
                                            <input type="hidden" name="oldImage" value="{{ $ppid->image }}">
                                            @if ($ppid->image)
                                                <img src="{{ asset('storage/' . $ppid->image) }}"
                                                    class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                            @else
                                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                            @endif
                                            <input class="form-control @error('image') is-invalid @enderror" name="image"
                                                type="file" id="image" onchange="previewImage()">
                                            @error('image')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="body">Isi</label>
                                        <input id="body" type="hidden" name="body" value="{{ $ppid->body }}">
                                        <trix-editor input="body"></trix-editor>
                                    </div>

                                    <div class="form-group">
                                        <label for="smallSelect">Bidang</label>
                                        <select class="form-control form-control-sm" name="bidang_id">
                                            @foreach ($bidang as $b)
                                            @if (old('bidang_id', $ppid->bidang_id) == $b->id)
                                                <option value="{{ $b->id }}" selected>{{ $b->nama_bidang }}</option>

                                            @else
                                                <option value="{{ $b->id }}">{{ $b->nama_bidang }}</option>
                                            @endif
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
