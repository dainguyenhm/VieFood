@extends('admin.layouts.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    <small>Danh mục sản phẩm con</small>
                    <a href="{{ route('admin.sub-categories.create') }}" class="btn btn-primary" style="float:right;"><i class="fa fa-plus-square"> Thêm mới</i></a>
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
                            <th>Danh mục sản phẩm con</th>
                            <th>Danh mục sản phẩm</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $sub_categories as $key => $sub_category)
                            <tr id="item-cat-{{ $sub_category->id }}" class="odd gradeX" align="center">
                                <td>{{ $sub_category->id }}</td>
                                <td>{{ $sub_category->name }}</td>
                                <td>{{ $sub_category->category->name }}</td>
                                <td class="center">
                                    <span class="btn-edit" data-id="{{ $sub_category->id }}"><i class="fa fa-pencil fa-fw"></i></span>
                                    <span class="btn-delete" data-id="{{ $sub_category->id }}" style="color: red;"><i class="fa fa-trash-o  fa-fw"></i></span>
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
            $(document).on('click', '.btn-edit', function() {
                //alert(1);
                var id = $(this).data('id');
                $.ajax({
                    url: "{{ route('admin.sub-categories.edit') }}",
                    method: "POST",
                    data: {
                        id: id,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function (res) {
                        $('#item-cat-' + id).html(res.view);
                    }
                });
            });

            $(document).on('click', '.btn-save', function() {
                var id = $(this).data('id');
                var name = $('.name input:text').val();
                var category_id = $('.category_id select').val();
                $.ajax({
                    url: "{{ route('admin.sub-categories.update') }}",
                    method: "POST",
                    data: {
                        id: id,
                        name: name,
                        category_id: category_id,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function (res) {
                        $('#item-cat-' + id).html(res.view);
                    }
                });
            });

            $(document).on('click', '.btn-cancel', function() {
                var id = $(this).data('id');
                $.ajax({
                    url: "{{ route('admin.sub-categories.show') }}",
                    method: "POST",
                    data: {
                        id: id,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function (res) {
                        $('#item-cat-' + id).html(res.view);
                    }
                });
            });

            $(document).on('click', '.btn-delete', function() {
                //alert(1);
                var id = $(this).data('id');
                if (confirm('Bạn chắc chắn muốn xóa?')) {
                    $.ajax({
                        url: "{{ route('admin.sub-categories.delete') }}",
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