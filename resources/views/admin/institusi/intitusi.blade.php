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
                        <div class="card-title">Semua Halaman Institusi</div>
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
                                    <td>Visi Misi</td>
                                    <td>
                                        <a href="/institusi/editvisimisi" class="btn btn-primary"> <i class="fa fa-edit"></i> Edit</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Tujuan</td>
                                    <td>
                                        <a href="/institusi/edittujuan" class="btn btn-primary"> <i class="fa fa-edit"></i> Edit</a>
                                    </td>
                                </tr>
                                    <td>3</td>
                                    <td>Motto</td>
                                    <td>
                                        <a href="/institusi/editmotto" class="btn btn-primary"> <i class="fa fa-edit"></i> Edit</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Kebijakan</td>
                                    <td>
                                        <a href="/institusi/editkebijakan" class="btn btn-primary"> <i class="fa fa-edit"></i> Edit</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Struktur Organisasi</td>
                                    <td>
                                        <a href="/institusi/editstrukturorganisasi" class="btn btn-primary"> <i class="fa fa-edit"></i> Edit</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Profil Pejabat</td>
                                    <td>
                                        <a href="/profilpejabat" class="btn btn-primary"> <i class="fa fa-edit"></i> Edit</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Maklumat Pelayanan</td>
                                    <td>
                                        <a href="/institusi/editmaklumat" class="btn btn-primary"> <i class="fa fa-edit"></i> Edit</a>
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
