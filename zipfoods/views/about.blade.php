@extends('templates/master')

@section('title')
    About
@endsection

@section('head')
    <link href='/css/about.css' rel='stylesheet'>
@endsection

@section('content')
    <h2>About</h2>

    {{ $aboutus }}
@endsection
<!-- solution -->
<!-- <p>ZipFoods is your one-stop-shop for convenient online grocery shopping in the greater Boston area.</p> -->
