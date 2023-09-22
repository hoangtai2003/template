@extends('layouts.master')

@section('title')
    <title>Contact</title>
@endsection
@section('css')
    <link rel="sylesheet" href="{{asset('home/honme.css')}}">
@endsection

@section('js')
    <script src="{{asset('home/home.js')}}"></script>
@endsection
@section('content')
    @include('contact.components.banner')
    @include('contact.components.contact_us')
    @include('home.component.subscribe')
@endsection








