@extends('layouts.master')

@section('title')
    <title>About us</title>
@endsection
@section('css')
    <link rel="sylesheet" href="{{asset('home/honme.css')}}">
@endsection

@section('js')
    <script src="{{asset('home/home.js')}}"></script>
@endsection
@section('content')

    @include('about.components.banner')

    @include('about.components.about_us')
    @include('about.components.our_team')
    @include('about.components.our_services')
    @include('home.component.subscribe')

@endsection








