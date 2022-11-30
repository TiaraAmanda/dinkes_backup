@extends('admin.layout.main')

@section('page-header')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Tata Cara Permohonan</h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Halaman Tata Cara Permohonan</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @if (empty($tcp[0]))
                                <div class="col-md-6 col-lg-12">
                                    <form action="/ppid/createtcp" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                            <input type="text" name="kategori" id="kategori" value="tata cara permohonan" hidden>
                                            <label for="judul">Judul</label>
                                            <input class="form-control" type="text" placeholder="Judul" name="judul"
                                                id="judul">
                                        </div>

                                        <div class="form-group">
                                            <label for="slug" class="form-label">Slug</label>
                                            <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug" required
                                                value="{{ old('slug') }}">
                                            @error('slug')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Sertakan Gambar untuk Headline Berita</label>
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
                                    <a href="/ppid/tambahtcp" class="btn btn-primary">Tambah Data Tata Cara Permohonan</a>

                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width: 20px;">No.</th>
                                                    <th scope="col">Judul</th>
                                                    <th scope="col">Acton</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($tcp as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $item->judul }}</td>
                                                        <td>
                                                            <a href="/ppid/tcp/{{ $item->id }}/edit" class="btn btn-primary">Edit</a>
                                                            <form action="/ppid/tcp/{{ $item->id }}/hapus" method="POST" class="d-inline">
                                                            @csrf
                                                            {{-- <a href="/ppid/stpk/{{ $item->id }}/hapus">Delete</a> --}}
                                                        <button class="btn btn-danger">Hapus</button>
                                                        </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
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
