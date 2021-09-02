@extends('admin.layouts.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    <small>Danh sách tin tức</small>
                    <a href="{{ route('admin.posts.create') }}" class="btn btn-primary" style="float:right;"><i class="fa fa-plus-square"> Thêm mới</i></a>
                </h1>
            </div>
        </div>
        <div id="message"></div>
        @include('admin.layouts.message')
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-bordered table-hover list-category" id="dataTables-sub-category">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Hình ảnh</th>
                            <th>Tiêu đề</th>
                            <th>Nội dung</th>
                            <th>Nhóm tin tức</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $posts as $key => $post)
                            <tr id="item-cat-{{ $post->id }}" class="odd gradeX" align="center">
                                <td>{{ $post->id }}</td>
                                <td><img src="images/uploads/posts/{{ $post->image }}" width="150px" height="100px"></td>
                                <td>{{ $post->title }}</td>
                                <td><div class="post-content">{!! $post->content !!}</div></td>
                                <td>{{ $post->postGroup->name }}</td>
                                <td class="center">
                                    <a href="{{ route('admin.posts.edit', ['id' => $post->id]) }}" class="btn-edit"><i class="fa fa-pencil fa-fw"></i></a>
                                    <span class="btn-delete" data-id="{{ $post->id }}" style="color: red;"><i class="fa fa-trash-o  fa-fw"></i></span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.btn-delete', function() {
                //alert(1);
                var id = $(this).data('id');
                if (confirm('Bạn chắc chắn muốn xóa?')) {
                    $.ajax({
                        url: "{{ route('admin.posts.delete') }}",
                        method: "POST",
                        data: {
                            id: id,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function (res) {
                            $('#message').html(res.message);
                            $('#item-cat-' + id).remove();
                        }
                    });
                } 
            });
        });
    </script>
@endsection