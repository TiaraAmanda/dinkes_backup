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
                        <div class="card-title">Halaman Data SPM</div>
                    </div>
                    <div class="card-body">
                        <a href="/admin/tambahdataspm" class="btn btn-primary">Tambah Data SPM</a>
                        <div class="row">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 20px;">No.</th>
                                        <th scope="col">Kabupaten/Kota</th>
                                        <th scope="col">SPM File</th>
                                        <th scope="col">Tahun</th>
                                        <th scope="col">Tribulan</th>
                                        <th scope="col">Date Add</th>
                                        <th scope="col">Acton</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($spm as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->kabkota->nama_kabkota}}</td>
                                            <td>{{ $item->nama_file }}</td>
                                            <td>{{ $item->tahun }}</td>
                                            <td>{{ $item->tribulan }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>
                                                <form action="/admin/spm/{{ $item->id }}/hapus" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    <button class="btn btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>


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
