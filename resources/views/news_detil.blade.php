@extends('layouts.main')
@section('container')
    <div class="container mt-4">
    <article>
        <h2 class="mb-5">{{ $news_detil->judul_berita }}</h2>
        <p> By.Leonardo dalam kategori ->{{ $news_detil->category->nama }}</p>
        {!! $news_detil->isi_berita !!}
        <p><a href="/news">Kembali Ke Berita</a></p>
    </article>
    </div>
@endsection