@extends('admin.layouts.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    <small>Thêm mới sản phẩm</small>
                </h1>
            </div>
        </div>
        @include('admin.layouts.message')
        <form action="{{ route('admin.products.store') }}" method="post" class="create-form" enctype="multipart/form-data">
            @csrf
            <div class="row line-item">
                <div class="col-md-2">
                    <label>Danh mục sản phẩm con</label>
                </div>
                <div class="col-md-4">
                    <select name="sub_category_id" class="form-control">
                        @foreach ($sub_categories as $sub_category)
                            <option value="{{ $sub_category->id }}">{{ $sub_category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row line-item">
                <div class="col-md-2">
                    <label>Tên sản phẩm</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="name" class="form-control">
                </div>
            </div>
            <div class="row line-item">
                <div class="col-md-2">
                    <label>Đơn giá</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="unit_price" class="form-control">
                </div>
            </div>
            <div class="row line-item">
                <div class="col-md-2">
                    <label>Số lượng</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="quantity" class="form-control">
                </div>
            </div>
            <div class="row line-item">
                <div class="col-md-2">
                    <label>Giảm giá(%)</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="discount" class="form-control" value="0">
                </div>
            </div>
            <div class="row line-item">
                <div class="col-md-2">
                    <label>Trạng thái</label>
                </div>
                <div class="col-md-4">
                    <input type="radio" name="status" value="1" checked> Bán
                    <input type="radio" name="status" value="0"> Ngừng
                </div>
            </div>
            <div class="row line-item">
                <div class="col-md-2">
                    <label>Sản phẩm hot</label>
                </div>
                <div class="col-md-4">
                    <input type="radio" name="hot" value="1" checked> Có
                    <input type="radio" name="hot" value="0"> Không
                </div>
            </div>
            <div class="row line-item">
                <div class="col-md-2">
                    <label>Mô tả</label>
                </div>
                <div class="col-md-8">
                    <textarea id="description-ckeditor" name="description" class="form-control"></textarea>
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
    CKEDITOR.replace('description-ckeditor');
</script>
@endsection