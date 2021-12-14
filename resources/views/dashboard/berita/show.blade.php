@extends('dashboard.layouts.main')
@section('container')
    <div class="content-header">
        <div class="car-body">
            <article>
                <h4 class="mb-3">{{ $berita->judul_berita }}</h4><hr style="background-color: white">
                <p>{!! $berita->isi_berita !!}</p>
                <a href="/dashboard/berita" class="btn tbn-success">kembali ke berita utama</a>
                <a href="" class="btn btn-warning">Edit</a>
                <a href="" class="btn btn-danger">Hapus</a>
            </article> 
        </div>
    </div>
</div>
@endsection
