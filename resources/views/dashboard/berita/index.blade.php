@extends('dashboard.layouts.main')
@section('container')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="col-sm-12">
              <h1 class="m-0">Halaman Berita</h1>
            </div><!-- /.col -->
        </div><!-- /.container-fluid -->
        <!-- /.card-header -->
        <div class="card-body">
          @if (session()->has('sukses'))
            <div class="alert alert-success" role="alert">
              {{ session('sukses') }}
            </div>
          @endif
          <a href="/dashboard/berita/create" class="btn btn-primary mb-3">Tambah Berita</a>
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>No</th>
              <th>Judul Berita</th>
              <th>Kategori</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($berita as $berita)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $berita->judul_berita }}</td>
                <td>{{ $berita->category->nama }}</td>
                <td>
                  <a href="/dashboard/berita/{{ $berita->slug }}" class="btn btn-info"><i class="far fa-eye nav-icon"></i></a>
                  <a href="" class="btn btn-warning"><i class="far fa-edit nav-icon"></i></a>
                  <a href="" class="btn btn-danger"><i class="nav-icon fas fa-trash-alt"></i></a>
                </td>
              <tr>
              @endforeach
              
          </table>
        </div>
        <!-- /.card-body -->
      </div><!-- /.content-header -->
@endsection

