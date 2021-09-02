@extends('admin.layouts.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    <small>Thêm mới banner</small>
                </h1>
            </div>
        </div>
        @include('admin.layouts.message')
        <form action="{{ route('admin.banners.store') }}" method="post" class="create-form" enctype="multipart/form-data">
            @csrf
            <div class="row line-item">
                <div class="col-md-2">
                    <label>Banner</label>
                </div>
                <div class="col-md-4">
                    <input type="file" name="image">
                </div>
            </div>
            <div class="row line-item">
                <div class="col-md-2">
                    <label>Loại banner</label>
                </div>
                <div class="col-md-4">
                    <select name="type" class="form-control">
                        <option value="1">Slide show</option>
                        <option value="2">Banner dưới slide show</option>
                        <option value="3">Banner bên menu trái</option>
                    </select>
                </div>
            </div>
            <div class="row line-item">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <input type="submit" value="Lưu" class="btn btn-primary">
                    <input type="reset" value="Nhập lại" class="btn btn-danger">
                </div>
            </div>
        </form> 
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection