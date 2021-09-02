@extends('admin.layouts.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    <small>Danh mục sản phẩm</small>
                    <a href="{{ route('admin.categories.create') }}" class="btn btn-primary" style="float:right;"><i class="fa fa-plus-square"> Thêm mới</i></a>
                </h1>
            </div>
        </div>
        <div id="message"></div>
        @include('admin.layouts.message')
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-bordered table-hover list-category" id="dataTables-category">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Tên danh mục</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $categories as $key => $category)
                            <tr id="item-cat-{{ $category->id }}" class="odd gradeX" align="center">
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td class="center">
                                    <span class="btn-edit" data-id="{{ $category->id }}"><i class="fa fa-pencil fa-fw"></i></span>
                                    <span class="btn-delete" data-id="{{ $category->id }}" style="color: red;"><i class="fa fa-trash-o  fa-fw"></i></span>
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
                    url: "{{ route('admin.categories.edit') }}",
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
                var name = $('.name input:text').val();
                var id = $(this).data('id');
                $.ajax({
                    url: "{{ route('admin.categories.update') }}",
                    method: "POST",
                    data: {
                        id: id,
                        name: name,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function (res) {
                        $('#item-cat-' + id).html(res.view);
                    }
                });
            });

            $(document).on('click', '.btn-cancel', function() {
                //alert(1);
                var id = $(this).data('id');
                $.ajax({
                    url: "{{ route('admin.categories.show') }}",
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
                        url: "{{ route('admin.categories.delete') }}",
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