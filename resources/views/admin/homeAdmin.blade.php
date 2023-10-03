@extends('admin.layouts.master')
@section('title')
    <title>
        Trang chủ
    </title>
@endsection
@section('content')
    <div class="wrapper">
        <div class="content-wrapper">
            @include('admin.partials.content_header',  ['name' => 'Home', 'key' => 'home'])
            <div class="content">
                <div class="content-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            Trang chủ
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


