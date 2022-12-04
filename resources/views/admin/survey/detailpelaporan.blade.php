@extends('admin.layout.main')

@section('page-header')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Pelaporan Pelanggaran</h4>
        </div>
        {{-- <div class="row"> --}}
        <div class="position-relative h-150">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Halaman Pelaporan Pelanggaran</div>
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            @foreach ($laporan_masyarakat as $item)
                                <p class="h5 fw-bold">Nama</p>
                                <p>{{ $item->nama }}</p>
                                <hr>
                                <p class="h5 fw-bold">Email</p>
                                <p>{{ $item->email }}</p>
                                <hr>
                                <p class="h5 fw-bold">What</p>
                                <p>{{ $item->what }}</p>
                                <hr>
                                <p class="h5 fw-bold">Who</p>
                                <p>{{ $item->who }}</p>
                                <hr>
                                <p class="h5 fw-bold">When</p>
                                <p>{{ $item->when }}</p>
                                <hr>
                                <p class="h5 fw-bold">Where</p>
                                <p>{{ $item->where }}</p>
                                <hr>
                                <p class="h5 fw-bold">How</p>
                                <p>{{ $item->how }}</p>
                                <hr>

                                <p class="h5 fw-bold">Bukti</p>
                                <p>{{ $item->bukti }}</p>
                                <hr>

                                {{-- <p class="position-relative h-150">
                                    <img class="w-100 h-200 mb-4 rounded" src="{{ $item->bukti }}"
                                        style="object-fit: cover;">
                                </p> --}}

                                <p class="h5 fw-bold">How</p>
                                <p>{{ $item->informasitambahan }}</p>
                                <hr>
                            @endforeach
                            {{-- </div> --}}
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
