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
            <tr>
              <td>1</td>
              <td>Isi Data</td>
              <td>Isi Data</td>
              <td>4</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Isi Data</td>
              <td>Isi Data</td>
              <td>5</td>
            </tr>
          </table>
        </div>
        <!-- /.card-body -->
      </div><!-- /.content-header -->
@endsection

