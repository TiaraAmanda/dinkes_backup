@extends('admin.layout.main')

@section('page-header')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Profil Pejabat</h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Detail Profil Pejabat</div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 20px;">No.</th>
                                    <th scope="col">Halaman</th>
                                    <th scope="col" style="width: 20px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Kepala Dinas Kesehatan Provinsi Jawa Timur</td>
                                    <td>
                                        <a href="/profilpejabat/editkepaladinkes" class="btn btn-primary"> <i class="fa fa-edit"></i> Edit</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Sekretariat</td>
                                    <td>
                                        <a href="/profilpejabat/sekretariat" class="btn btn-primary"> <i class="fa fa-edit"></i> Edit</a>
                                    </td>
                                </tr>
                                    <td>3</td>
                                    <td>Bidang Kesehatan Masyarakat</td>
                                    <td>
                                        <a href="/profilpejabat/bidangkesma" class="btn btn-primary"> <i class="fa fa-edit"></i> Edit</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Bidang Pencegahan dan Pengendalian Penyakit</td>
                                    <td>
                                        <a href="/profilpejabat/bidangppk" class="btn btn-primary"> <i class="fa fa-edit"></i> Edit</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Bidang Pelayanan Kesehatan</td>
                                    <td>
                                        <a href="/profilpejabat/bidangpk" class="btn btn-primary"> <i class="fa fa-edit"></i> Edit</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Bidang Sumber Daya Kesehatan</td>
                                    <td>
                                        <a href="/profilpejabat/bidangsdk" class="btn btn-primary"> <i class="fa fa-edit"></i> Edit</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
