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
                            <div class="card-title">Halaman Survey Kepuasan STRTTK</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="card-body">
                                    @foreach ($survey_kepuasan as $item)
                                        <p class="h5 fw-bold">Nama</p>
                                        <p>{{ $item->nama }}</p>
                                        <hr>
                                        <p class="h5 fw-bold">Umur</p>
                                        <p>{{ $item->umur }}</p>
                                        <hr>
                                        <p class="h5 fw-bold">Jenis Kelamin</p>
                                        <p>{{ $item->jenis_kelamin }}</p>
                                        <hr>
                                        <p class="h5 fw-bold mt-3">Pendidikan Terkhir</p>
                                        <p>{{ $item->pertanyaan2 }}</p>
                                        <hr>
                                        <p class="h5 fw-bold mt-3">Bagaimana Persyaratan yang harus dipenuhi dalam
                                            penerbitan
                                            STRTTK ?</p>
                                        <p>{{ $item->pertanyaan3 }}</p>
                                        <hr>
                                        <p class="h5 fw-bold mt-3">Menurut Bpk/Ibu/Sdr bagaimana prosedur/tata cara
                                            penerbitan
                                            STRTTK dengan menggunakan aplikasi : strttkdinkes.pafijatim.or.id ?</p>
                                        <p>{{ $item->pertanyaan4 }}</p>
                                        <hr>
                                        <p class="h5 fw-bold mt-3">Bagaimana jangka waktu pelayanan Penerbitan STRTTK
                                            mulai
                                            dinyatakan berkas lengkap hingga Anda mendapatkan notifikasi STRTTK selesai dan
                                            dapat diambil ?</p>
                                        <p>{{ $item->pertanyaan5 }}</p>
                                        <hr>
                                        <p class="h5 fw-bold mt-3">Menurut Bpk/Ibu/Sdr, bagaimana hasil pelayanan
                                            penerbitan
                                            STRTTK di Dinas Kesehatan Provinsi Jawa Timur ?</p>
                                        <p>{{ $item->pertanyaan6 }}</p>
                                        <hr>
                                        <p class="h5 fw-bold mt-3">Menurut Bpk/Ibu/sdr, bagaimana kemampuan (pengetahuan,
                                            keahlian, keterampilan, dan pengalaman) petugas ?</p>
                                        <p>{{ $item->pertanyaan7 }}</p>
                                        <hr>
                                        <p class="h5 fw-bold mt-3">Bagaimana sikap petugas saat memberikan Pelayanan
                                            penerbitan STRTTK ?</p>
                                        <p>{{ $item->pertanyaan8 }}</p>
                                        <hr>
                                        <p class="h5 fw-bold mt-3">Menurut Bpk/Ibu/Sdr, bagaimana Fasilitas ruangan tempat
                                            pelayanan Pengambilan STRTTK ?</p>
                                        <p>{{ $item->pertanyaan9 }}</p>
                                        <hr>
                                        <p class="h5 fw-bold mt-3">Menurut Bpk/Ibu/Sdr, bagaimana penanganan pengaduan,
                                            saran
                                            dan masukan, serta tindak terkait pelayanan STRTTK ?</p>
                                        <p>{{ $item->pertanyaan10 }}</p>
                                        <hr>
                                        <p class="h5 fw-bold mt-3">kritik dan Saran</p>
                                        <p>{{ $item->kritiksaran }}</p>
                                        {{-- <hr> --}}
                                    @endforeach
                                </div>
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
