@extends('admin.layouts.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    <small>Thêm mới nhóm tin tức</small>
                </h1>
            </div>
        </div>
        @include('admin.layouts.message')
        <form action="{{ route('admin.post-groups.store') }}" method="post" class="create-form">
            @csrf
            <div class="row line-item">
                <div class="col-md-2">
                    <label>Tên nhóm tin tức</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="name" class="form-control">
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