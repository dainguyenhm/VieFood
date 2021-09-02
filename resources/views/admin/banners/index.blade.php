@extends('admin.layouts.master') @section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    <small>Banners</small>
                    <a href="{{ route('admin.banners.create') }}" class="btn btn-primary" style="float:right;"><i class="fa fa-plus-square"> Thêm mới</i></a>
                </h1>
            </div>
        </div>
        <div id="message"></div>
        @include('admin.layouts.message')
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-bordered table-hover list-category" id="dataTables-banner">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Banners</th>
                            <th>Loại banner</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $banners as $key => $banner)
                            <tr id="item-cat-{{ $banner->id }}" class="odd gradeX" align="center">
                                <td>{{ $banner->id }}</td>
                                <td>
                                    <img src="images/uploads/banners/{{ $banner->image }}" width="200px" height="70px">
                                </td>
                                <td>
                                    @php
                                    switch ($banner->type) {
                                        case 1:
                                            echo 'Slide show';
                                            break;
                                        case 2:
                                            echo 'Banner dưới slide show';
                                            break;
                                        case 3:
                                            echo 'Banner bên menu trái';
                                            break;
                                        default:
                                            //code to be executed
                                    }
                                    @endphp
                                </td>
                                <td class="center">
                                    <a href="{{ route('admin.banners.edit', ['id' => $banner->id]) }}" class="btn-edit"><i class="fa fa-pencil fa-fw"></i></a>
                                    <span class="btn-delete" data-id="{{ $banner->id }}" style="color: red;"><i class="fa fa-trash-o  fa-fw"></i></span>
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
                        url: "{{ route('admin.banners.delete') }}",
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