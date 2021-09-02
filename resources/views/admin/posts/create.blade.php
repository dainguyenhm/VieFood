@extends('admin.layouts.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    <small>Thêm mới tin tức</small>
                </h1>
            </div>
        </div>
        @include('admin.layouts.message')
        <form action="{{ route('admin.posts.store') }}" method="post" class="create-form" enctype="multipart/form-data">
            @csrf
            <div class="row line-item">
                <div class="col-md-2">
                    <label>Nhóm tin tức</label>
                </div>
                <div class="col-md-8">
                    <select name="post_group_id" class="form-control">
                        @foreach ($post_groups as $post_group)
                            <option value="{{ $post_group->id }}">{{ $post_group->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row line-item">
                <div class="col-md-2">
                    <label>Tiêu đề</label>
                </div>
                <div class="col-md-8">
                    <input type="text" name="title" class="form-control">
                </div>
            </div>
            <div class="row line-item">
                <div class="col-md-2">
                    <label>Nội dung</label>
                </div>
                <div class="col-md-8">
                    <textarea id="content-ckeditor" name="content" class="form-control"></textarea>
                </div>
            </div>
            <div class="row line-item">
                <div class="col-md-2">
                    <label>Hình ảnh</label>
                </div>
                <div class="col-md-4">
                    <input type="file" name="image">
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
@section('script')
<script>
    CKEDITOR.replace('content-ckeditor');
</script>
@endsection