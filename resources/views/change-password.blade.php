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
                    <li><a href="#"><i class="fas fa-user"></i> Thông tin tài khoản</a></li>
                    <li><a href="#"><i class="fas fa-file-invoice"></i> Đơn hàng của tôi</a></li>
                    <li><a href="#"><i class="fas fa-thumbs-up"></i> Sản phẩm yêu thích</a></li>
                    <li class="active"><a href="#"><i class="fa fa-key"></i> Thay đổi mật khẩu</a></li>
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
                        <li><a href=""><strong>Thay đổi mật khẩu</strong></a></li>
                    </ul>
                </div>
            </div>
            <div class="row list-product">
                <div class="list-product-title">
                    <h3><span>Thay đổi mật khẩu</span></h3>
                </div>
            </div>
            <div class="row list-product">

            </div>
        </div>
    </div>
</div>
@endsection