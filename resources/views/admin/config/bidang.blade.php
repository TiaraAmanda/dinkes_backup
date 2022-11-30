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
                        <div class="card-title">Halaman Bidang</div>
                    </div>
                    <div class="row">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 20px;">No.</th>
                                        <th scope="col">Nama Bidang</th>
                                        <th scope="col" style="width: 20px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bidang as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nama_bidang }}</td>
                                            <td>
                                                <form action="/konfig/bidang/{{ $item->id }}/hapus" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    <button class="btn btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        <div class="col-md-6 col-lg-12">
                            {{-- <a href="/profilpejabat/tambahbidangpk" class="btn btn-primary">Tambah Profil Pejabat Bidang --}}
                                {{-- Pelayanan Kesehatan</a> --}}


                        <form action="/konfig/createbidang" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nama_bidang">Tambah Nama Bidang</label>
                                <input class="form-control" type="text" placeholder="Nama Bidang" name="nama_bidang"
                                    id="nama_bidang">
                            </div>
                            <div class="form-group">
                                <label for="slug">Slug Nama Bidang</label>
                                <input class="form-control" type="text" placeholder="Nama Bidang" name="slug"
                                    id="slug">
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                                <button class="btn btn-danger">Batal</button>
                            </div>

                        </form>
                        </div>
                    </div>

                        {{-- @endif --}}
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
