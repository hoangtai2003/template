@extends('layouts.master')

@section('title')
    <title>Hexashop</title>
@endsection
@section('css')
    <link rel="sylesheet" href="{{asset('home/honme.css')}}">
@endsection

@section('js')
    <script src="{{asset('home/home.js')}}"></script>
@endsection
@section('content')
    @include('home.component.banner')
    @include('home.component.section_men')
    @include('home.component.section_women')
    @include('home.component.section_kid')
    @include('home.component.section_explore')
    @include('home.component.section_social')
    @include('home.component.subscribe')
@endsection

