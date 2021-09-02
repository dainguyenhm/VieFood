@extends('admin.layouts.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    <small>Sản phẩm</small>
                    <a href="{{ route('admin.products.create') }}" class="btn btn-primary" style="float:right;"><i class="fa fa-plus-square"> Thêm mới</i></a>
                </h1>
            </div>
        </div>
        <div id="message"></div>
        @include('admin.layouts.message')
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-bordered table-hover list-category" id="dataTables-product">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Hình ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Giảm giá(%)</th>
                            <th>Trạng thái</th>
                            <th>Hot</th>
                            <th>Danh mục</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $products as $key => $product)
                            <tr id="item-cat-{{ $product->id }}" class="odd gradeX" align="center">
                                <td>{{ $product->id }}</td>
                                <td>
                                    <img src="images/uploads/products/{{ $product->image }}" width="100px" height="70px">
                                </td>
                                <td>{{ $product->name }}</td>
                                <td>{{ number_format($product->unit_price) }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->discount }}</td>
                                <td>
                                    @if ($product->status == 1)
                                        <span style="color:green">Bán</span>
                                    @else 
                                        <span style="color:red">Ngừng</span>
                                    @endif
                                </td>
                                <td>{{ $product->hot }}</td>
                                <td>{{ $product->subCategory->name }}</td>
                                <td class="center">
                                    <a href="{{ route('admin.products.edit', ['id' => $product->id]) }}" class="btn-edit"><i class="fa fa-pencil fa-fw"></i></a>
                                    <span class="btn-delete" data-id="{{ $product->id }}" style="color: red;"><i class="fa fa-trash-o  fa-fw"></i></span>
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
        $(document).ready(function(){
            $(document).on('click', '.btn-delete', function() {
                var id = $(this).data('id');
                if (confirm('Bạn chắc chắn muốn xóa?')) {
                    $.ajax({
                        url: "{{ route('admin.products.delete') }}",
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