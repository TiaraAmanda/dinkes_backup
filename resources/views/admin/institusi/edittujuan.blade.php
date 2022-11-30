@extends('admin.layout.main')

@section('page-header')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Institusi</h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Halaman Tujuan</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @if (empty($institusi_tujuan[0]))
                            <div class="col-md-6 col-lg-12">
                                <form action="/institusi/tujuan/halamanTujuan" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input id="profil_id" name="profil_id" type="text" value="{{ $profil[1]->id }}"
                                            hidden>
                                        <label for="judul">Judul</label>
                                        <input class="form-control" type="text" placeholder="Judul" name="judul"
                                            id="judul">
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
                                <form action="/institusi/updatetujuan" method="POST"
                                    enctype="multipart/form-data">
                                    {{-- @method('put') --}}
                                    @csrf
                                    @foreach ($institusi_tujuan as $item)
                                        <div class="form-group">
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
