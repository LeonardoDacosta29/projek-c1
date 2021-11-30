@extends('layouts.main')
@section('container')
    <div class="container mt-4">  
    @foreach ($news as $detil_berita)
        <article >
            <h2><a href="/news/{{ $detil_berita->slug }}">{{ $detil_berita->judul_berita }}</a></h2>
            <p>{{ $detil_berita->excerpt }}</p>
        </article>
    @endforeach
@endsection
