@extends('admin.layouts.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    <small>Cập nhật banner</small>
                </h1>
            </div>
        </div>
        @include('admin.layouts.message')
        <form action="{{ route('admin.banners.update', ['id' => $banner->id]) }}" method="post" enctype="multipart/form-data" class="create-form">
            @csrf
            <div class="row line-item">
                <div class="col-md-2">
                    <label>Banner</label>
                </div>
                <div class="col-md-4">
                    <input type="file" name="image" class="form-control">
                </div>
            </div>
            <div class="row line-item">
                <div class="col-md-2">
                    <label>Loại banner</label>
                </div>
                <div class="col-md-4">
                    <select name="type" class="form-control">
                        @php
                        switch ($banner->type) {
                            case 1:
                                echo '<option value="1" selected>Slide show</option>';
                                echo '<option value="2">Banner dưới slide show</option>';
                                echo '<option value="3">Banner bên menu trái</option>';
                                break;
                            case 2:
                                echo '<option value="1">Slide show</option>';
                                echo '<option value="2" selected>Banner dưới slide show</option>';
                                echo '<option value="3">Banner bên menu trái</option>';
                                break;
                            case 3:
                                echo '<option value="1">Slide show</option>';
                                echo '<option value="2">Banner dưới slide show</option>';
                                echo '<option value="3" selected>Banner bên menu trái</option>';
                                break;
                            default:
                                //code to be executed
                        }   
                        @endphp
                    </select>
                </div>
            </div>
            <div class="row line-item">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <input type="submit" value="Lưu" class="btn btn-primary">
                    <a href="{{ route('admin.banners.index') }}" class="btn btn-danger">Hủy</a>
                </div>
            </div>
            </td>
        </form>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection