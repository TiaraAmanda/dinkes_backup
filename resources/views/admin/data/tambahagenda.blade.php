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
                        <div class="card-title">Tambah Agenda</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <form action="/data/createagenda" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="tanggal_agenda" class="form-label">Tanggal Agenda</label>
                                            <input class="form-control" type="date" id="tanggal_agenda"
                                                name="tanggal_agenda">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="nama_agenda" class="form-label">Nama Agenda</label>
                                            <input class="form-control" type="text" id="nama_agenda" name="nama_agenda"
                                                placeholder="Nama Agenda">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit">Unggah</button>
                                        <button class="btn btn-danger">Batal</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
