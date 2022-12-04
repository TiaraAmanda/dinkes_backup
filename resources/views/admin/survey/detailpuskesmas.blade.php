@extends('admin.layout.main')

@section('page-header')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Survey Kepuasan</h4>
        </div>
        <div class="row">
            <div class="position-relative h-150">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Halaman Survey Kepuasan Masyarakat</div>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                @foreach ($survey_puskesmas as $item)
                                    <p class="h5 fw-bold">Nama</p>
                                    <p>{{ $item->nama }}</p>
                                    <hr>
                                    <p class="h5 fw-bold">Jenis Kelamin</p>
                                    <p>{{ $item->jenis_kelamin }}</p>
                                    <hr>
                                    <p class="h5 fw-bold">Umur</p>
                                    <p>{{ $item->umur }}</p>
                                    <hr>
                                    <p class="h5 fw-bold mt-3">Pendidikan Terakhir</p>
                                    <p>{{ $item->pendidikan }}</p>
                                    <hr>
                                    <p class="h5 fw-bold">Instansi</p>
                                    <p>{{ $item->instansi }}</p>
                                    <hr>
                                    <p class="h5 fw-bold">Jabatan</p>
                                    <p>{{ $item->jabatan }}</p>
                                    <hr>
                                    <p class="h5 fw-bold">Email</p>
                                    <p>{{ $item->email }}</p>
                                    <hr>
                                    <p class="h5 fw-bold">No.HP</p>
                                    <p>{{ $item->nohp }}</p>
                                    <hr>
                                    <p class="h5 fw-bold">Jenis Layanan yang Diterima</p>
                                    <p>{{ $item->pertanyaan1 }}</p>
                                    <hr>
                                    <p class="h5 fw-bold">Bagaimana pendapat Saudara tentang kesesuaian persyaratan
                                        pelayanan dengan jenis pelayanan</p>
                                    <p>{{ $item->pertanyaan2 }}</p>
                                    <hr>
                                    <p class="h5 fw-bold">Bagaimana pemahaman Saudara tentang kemudahan prosedur
                                        pelayanannya</p>
                                    <p>{{ $item->pertanyaan3 }}</p>
                                    <hr>
                                    <p class="h5 fw-bold">Bagaimana pendapat Saudara tentang kecepatan waktu dalam
                                        memberikan pelayanan</p>
                                    <p>{{ $item->pertanyaan4 }}</p>
                                    <hr>
                                    <p class="h5 fw-bold">Bagaimana pendapat Saudara tentang kewajaran biaya/ tarif
                                        dalam pelayanan</p>
                                    <p>{{ $item->pertanyaan5 }}</p>
                                    <hr>
                                    <p class="h5 fw-bold">Bagaimana pendapat Saudara tentang kesesuaian produk pelayanan
                                        antara yang tercantum dalam standar pelayanan dengan hasil yang diberikan</p>
                                    <p>{{ $item->pertanyaan6 }}</p>
                                    <hr>
                                    <p class="h5 fw-bold">Bagaimana pendapat Saudara tentang kompetensi kemampuan
                                        petugas dalam pelayanan</p>
                                    <p>{{ $item->pertanyaan7 }}</p>
                                    <hr>
                                    <p class="h5 fw-bold">Bagaimana pendapat Saudara tentang perilaku petugas dalam
                                        pelayanan terkait kesopanan dan keramahan</p>
                                    <p>{{ $item->pertanyaan8 }}</p>
                                    <hr>
                                    <p class="h5 fw-bold">Bagaimana pendapat Saudara tentang kualitas sarana dan
                                        prasarana</p>
                                    <p>{{ $item->pertanyaan9 }}</p>
                                    <hr>
                                    <p class="h5 fw-bold">Bagaimana pendapat Saudara tentang penanganan pengaduan
                                        pengguna layanan</p>
                                    <p>{{ $item->pertanyaan10 }}</p>
                                    <hr>
                                    <p class="h5 fw-bold">Masukan</p>
                                    <p>{{ $item->masukan }}</p>
                                    <hr>
                                    <p class="h5 fw-bold">Saran Penyempurnaan</p>
                                    <p>{{ $item->saranpenyempurnaan }}</p>
                                    <hr>
                                @endforeach
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
