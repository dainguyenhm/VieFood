@extends('layouts.master')
@section('content')
<!-- main -->
<div class="container">
    <div class="row main">
        <div class="col-md-3">
            <div class="menu-product-title container">
                <div class="row">
                    <h3><span>Quản lý cả nhân</span></h3>
                    <span class="btn-menu-product" aria-expanded="false" data-toggle="collapse" data-target="#drop-menu"><i class="fas fa-bars"></i></span>
                </div>
            </div>
            <div class="menu-account container">
                <ul>
                    <li class="active"><a href="#"><i class="fas fa-user"></i> Thông tin tài khoản</a></li>
                    <li><a href="#"><i class="fas fa-file-invoice"></i> Đơn hàng của tôi</a></li>
                    <li><a href="#"><i class="fas fa-thumbs-up"></i> Sản phẩm yêu thích</a></li>
                    <li><a href="#"><i class="fa fa-key"></i> Thay đổi mật khẩu</a></li>
                    <li><a href="#"><i class="fas fa-sign-out-alt"></i> Thoát</a></li>
                </ul>
            </div>
        </div>
        <!-- list-product -->
        <div class="col-md-9 left-content">
            <div class="row">
                <div class="col-md-12 path-current">
                    <ul>
                        <li><a href="index.html">Trang chủ</a></li>
                        <li><i class="fas fa-angle-double-right"></i></li>
                        <li><a href=""><strong>Thông tin tài khoản</strong></a></li>
                    </ul>
                </div>
            </div>
            <div class="row list-product">
                <div class="list-product-title">
                    <h3><span>Thông tin tài khoản</span></h3>
                </div>
            </div>
            <div class="row account">
                <div class="col-md-6 account-info">
                    <div class="row">
                        <div class="col-md-3"><label>Họ tên</label></div>
                        <div class="col-md-9"><input type="text" value="Nguyễn Tú Điền" class="form-control"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"><label>Giới tính</label></div>
                        <div class="col-md-9">
                            <select class="form-control">
                                <option checked="true">Nam</option>
                                <option>Nữ</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"><label>Ngày sinh</label></div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="16/09/1999">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 account-info">
                    <div class="row">
                        <div class="col-md-3"><label>Điện thoại</label></div>
                        <div class="col-md-9"><input type="text" value="0974664356" class="form-control"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"><label>Email</label></div>
                        <div class="col-md-9"><input type="text" value="tudien1609@gmail.com" class="form-control"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"><label>Địa chỉ</label></div>
                        <div class="col-md-9"><input type="text" value="Thường Tín - Hà Nội" class="form-control"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 btn-update"><a href="#" class="btn btn-dark">Cập nhật</a></div>
            </div>
        </div>
    </div>
</div>
@endsection