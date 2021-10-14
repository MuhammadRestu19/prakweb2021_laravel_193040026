@extends('layouts.main')

@section('container')
    <h1>halaman about</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnailn rounded-circle">
@endsection