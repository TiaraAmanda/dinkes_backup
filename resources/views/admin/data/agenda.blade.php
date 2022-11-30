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
                        <div class="card-title">Halaman Agenda</div>
                    </div>
                    <div class="card-body">
                        <a href="/data/tambahagenda" class="btn btn-primary">Tambah Agenda</a>
                        <div class="row">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 20px;">No.</th>
                                        <th scope="col">Tanggal Agenda</th>
                                        <th scope="col">Nama Agenda</th>
                                        <th scope="col" style="width: 20px;">Acton</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($agenda as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->tanggal_agenda }}</td>
                                            <td>{{ $item->nama_agenda }}</td>
                                            <td>
                                                <form action="/data/agenda/{{ $item->id }}/hapus" method="POST"
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
@endsection
