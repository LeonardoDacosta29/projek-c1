@extends('layouts.main')

@section('container')    
    <h1>Halaman About</h1>
    <h5>{{ $name }}</h5>
    <h5>{{ $email }}</h5>
    <img src="img/{{ $image }}" alt="{{$name}}" width="200">
@endsection