@extends('admin.layouts.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    <small>Cập nhật sản phẩm</small>
                </h1>
            </div>
        </div>
        @include('admin.layouts.message')
        <form action="{{ route('admin.products.update', ['id' => $product->id]) }}" method="post" class="create-form" enctype="multipart/form-data">
            @csrf
            <div class="row line-item">
                <div class="col-md-2">
                    <label>Danh mục sản phẩm con</label>
                </div>
                <div class="col-md-4">
                    <select name="sub_category_id" class="form-control">
                        <option value="{{ $old_sub_category->id }}" checked="true">{{ $old_sub_category->name }}</option>
                        @foreach ($sub_categories as $sub_category)
                            @if ($sub_category->id != $old_sub_category->id)
                                <option value="{{ $sub_category->id }}">{{ $sub_category->name }}</option>    
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row line-item">
                <div class="col-md-2">
                    <label>Tên sản phẩm</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control">
                </div>
            </div>
            <div class="row line-item">
                <div class="col-md-2">
                    <label>Đơn giá</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="unit_price" value="{{ $product->unit_price }}" class="form-control">
                </div>
            </div>
            <div class="row line-item">
                <div class="col-md-2">
                    <label>Giảm giá(%)</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="discount" value="{{ $product->discount }}" class="form-control">
                </div>
            </div>
            <div class="row line-item">
                <div class="col-md-2">
                    <label>Mô tả</label>
                </div>
                <div class="col-md-8">
                    <textarea id="description-ckeditor" name="description" class="form-control">
                        {!! $product->description !!}
                    </textarea>
                </div>
            </div>
            <div class="row line-item">
                <div class="col-md-2">
                    <label>Trạng thái</label>
                </div>
                <div class="col-md-4">
                    @if ($product->status == 1)
                        <input type="radio" name="status" value="1" checked> Bán
                        <input type="radio" name="status" value="0"> Ngừng
                    @else 
                        <input type="radio" name="status" value="1"> Bán
                        <input type="radio" name="status" value="0" checked> Ngừng
                    @endif
                </div>
            </div>
            <div class="row line-item">
                <div class="col-md-2">
                    <label>Sản phẩm hot</label>
                </div>
                <div class="col-md-4">
                    @if ($product->status == 1)
                        <input type="radio" name="hot" value="1" checked> Có
                        <input type="radio" name="hot" value="0"> Không
                    @else 
                        <input type="radio" name="hot" value="1"> Có
                        <input type="radio" name="hot" value="0" checked> Không
                    @endif
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
                    <a href="{{ route('admin.products.index') }}" class="btn btn-danger">Hủy</a>
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