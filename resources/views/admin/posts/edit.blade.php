@extends('admin.layouts.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    <small>Cập nhật tin tức</small>
                </h1>
            </div>
        </div>
        @include('admin.layouts.message')
        <form action="{{ route('admin.posts.update', ['id' => $post->id]) }}" method="post" class="create-form" enctype="multipart/form-data">
            @csrf
            <div class="row line-item">
                <div class="col-md-2">
                    <label>Nhóm tin tức</label>
                </div>
                <div class="col-md-8">
                    <select name="post_group_id" class="form-control">
                        <option value="{{ $old_post_group->id }}" checked="true">{{ $old_post_group->name }}</option>
                        @foreach ($post_groups as $post_groups)
                            @if ($post_groups->id != $old_post_group->id)
                                <option value="{{ $post_groups->id }}">{{ $post_groups->name }}</option>    
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row line-item">
                <div class="col-md-2">
                    <label>Tiêu đề</label>
                </div>
                <div class="col-md-8">
                    <input type="text" name="title" class="form-control" value="{{ $post->title }}">
                </div>
            </div>
            <div class="row line-item">
                <div class="col-md-2">
                    <label>Nội dung</label>
                </div>
                <div class="col-md-8">
                    <textarea id="content-ckeditor" name="content" class="form-control">{{ $post->content }}</textarea>
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