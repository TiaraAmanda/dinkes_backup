@extends('admin.layout.main')

@section('page-header')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Survey Kepuasan</h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Halaman Survey Kepuasan STRTTK</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">P1</th>
                                            <th scope="col">P2</th>
                                            <th scope="col">P3</th>
                                            <th scope="col">P4</th>
                                            <th scope="col">P5</th>
                                            <th scope="col">P6</th>
                                            <th scope="col">P7</th>
                                            <th scope="col">P8</th>
                                            <th scope="col">P9</th>
                                            <th scope="col">P10</th>
                                            <th scope="col">Kritik Saran</th>
                                            <th scope="col">Data Masuk</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($survey_kepuasan as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->jenis_kelamin }}</td>
                                                <td>{{ $item->pertanyaan2 }}</td>
                                                <td>{{ $item->pertanyaan3 }}</td>
                                                <td>{{ $item->pertanyaan4 }}</td>
                                                <td>{{ $item->pertanyaan5 }}</td>
                                                <td>{{ $item->pertanyaan6 }}</td>
                                                <td>{{ $item->pertanyaan7 }}</td>
                                                <td>{{ $item->pertanyaan8 }}</td>
                                                <td>{{ $item->pertanyaan9 }}</td>
                                                <td>{{ $item->pertanyaan10 }}</td>
                                                <td>{{ $item->kritiksaran }}</td>
                                                <td>{{ $item->created_at->diffForHumans() }}</td>
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
