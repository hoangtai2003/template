
@extends('layouts.master')

@section('title')
    <title>Product Detail</title>
@endsection
@section('css')
    <link rel="sylesheet" href="{{asset('home/honme.css')}}">
@endsection

@section('js')
    <script src="{{asset('home/home.js')}}"></script>
@endsection
@section('content')
    @include('product.components.banner')
    @include('single_product.detail_product')
@endsection





