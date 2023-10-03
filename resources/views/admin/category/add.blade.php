@extends('admin.layouts.master')
@section('title')
    <title>
        Trang chủ
    </title>
@endsection
@section('content')
    <div class="wrapper">
        <div class="content-wrapper">
            @include('admin.partials.content_header', ['name' => 'Category', 'key' => 'Add'])
            <div class="content">
                <div class="content-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="{{route('store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Tên danh mục</label>
                                    <input type="text" class="form-control"  placeholder="Nhập tên danh mục" name="name">
                                </div>
                                <div class="form-group">
                                    <label>Chọn danh mục cha</label>
                                    <select class="form-control" name="parent_id">
                                        <option value="0">Chọn danh mục cha</option>
                                        {!! $htmlOption !!}
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


