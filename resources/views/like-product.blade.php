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
                    <li class="active"><a href="#"><i class="fas fa-thumbs-up"></i> Sản phẩm yêu thích</a></li>
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
                        <li><a href=""><strong>Sản phẩm yêu thích</strong></a></li>
                    </ul>
                </div>
            </div>
            <div class="row list-product">
                <div class="list-product-title">
                    <h3><span>Sản phẩm yêu thích</span></h3>
                </div>
            </div>
            <div class="row list-product">
                <div class="col-md-3">
                    <div class="item product-item">
                        <img class="product-item-img" src="assets/images/products/salad_thit_nuong_vi_large.jpg" alt="">
                        <div class="name"><a href="#">Salad thịt nướng</a></div>
                        <div class="price">
                            <a href="#" class="unit-price">59,000 ₫</a>
                            <a href="#" class="promote-price">70,000 ₫</a>
                        </div>
                        <div class="add-cart">
                            <div class="add-cart-button">
                                <button>Mua hàng</button>
                                <i class="fas fa-cart-plus"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="item product-item">
                        <img class="product-item-img" src="assets/images/products/my_xao_thap_cam_large.jpg" alt="">
                        <div class="name"><a href="#">Mỳ xào thập cẩm</a></div>
                        <div class="price">
                            <a href="#" class="unit-price">59,000 ₫</a>
                            <a href="#" class="promote-price">70,000 ₫</a>
                        </div>
                        <div class="add-cart">
                            <div class="add-cart-button">
                                <button>Mua hàng</button>
                                <i class="fas fa-cart-plus"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection