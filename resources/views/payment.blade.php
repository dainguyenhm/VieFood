@extends('layouts.master')
@section('content')
<!-- main -->
<div class="container">
    <div class="row main">
        <!-- list-product -->
        <div class="col-md-12 left-content">
            <div class="row">
                <div class="col-md-6 path-current">
                    <ul>
                        <li><a href="index.html">Trang chủ</a></li>
                        <li><i class="fas fa-angle-double-right"></i></li>
                        <li><a href="#"><strong>Thanh toán</strong></a></li>
                    </ul>
                </div>
            </div>
            <div class="row list-product">
                <div class="list-product-title">
                    <h3><span>Thanh toán</span></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 cart-content">
                    <ul class="row">
                        <li class="active col-md-3 col-xs-12 col-sm-4 col-md-offset-3 col-sm-offset-0 col-xs-offset-0">
                            <span><i class="fa fa-shopping-cart"></i></span>
                            <span class="title">Giỏ hàng của tôi</span>
                            <span class="step-number">1</span>
                        </li>
                        <li class="active col-md-3 col-xs-12 col-sm-4 col-md-offset-3 col-sm-offset-0 col-xs-offset-0">
                            <span><i class="fas fa-hand-holding-usd"></i></span>
                            <span class="title">Thanh toán</span>
                            <span class="step-number">2</span>
                        </li>
                        <li class="col-md-3 col-xs-12 col-sm-4 col-md-offset-3 col-sm-offset-0 col-xs-offset-0">
                            <span><i class="fas fa-check"></i></span>
                            <span class="title">Hoàn tất</span>
                            <span class="step-number">3</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row payment-content">
                <div class="col-md-4 payment-steps address-payment">
                    <h4 class="payment-title">1. Địa chỉ thanh toán và giao hàng</h4>
                    <div class="step-preview">
                        <h2 class="title">Thông tin thanh toán</h2>
                        <div class="user-login">
                            <a class="register" href="#">Đăng ký tài khoản mua hàng</a>
                            <a class="login" href="#">Đăng nhập</a>
                        </div>
                        <label>Mua hàng không cần tài khoản</label>
                        <form action="">
                            <div class="input-form">
                                <input type="text" name="fullname" class="form-control" placeholder="Họ & Tên">
                            </div>
                            <div class="input-form">
                                <input type="text" name="phone" class="form-control" placeholder="Số điện thoại">
                            </div>
                            <div class="input-form">
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="input-form">
                                <input type="text" name="address" class="form-control" placeholder="Địa chỉ">
                            </div>
                            <div class="input-form">
                                <select class="form-control" name="city"> 
                                    <option value="1">Tỉnh/TP</option>
                                </select>
                            </div>
                            <div class="input-form">
                                <select class="form-control" name="district"> 
                                    <option value="1">Quận/Huyện</option>
                                </select>
                            </div>
                            <div class="input-form">
                                <textarea name="note" id="" rows="4" class="form-control" placeholder="Ghi chú đơn hàng"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 payment-steps transport-payement">
                    <h4 class="payment-title">2. Thanh toán và vận chuyển</h4>
                    <div class="step-preview">
                        <h2 class="title">Vận chuyển</h2>
                        <form action="">
                            <div class="input-form">
                                <select class="form-control" name="district"> 
                                    <option value="1"></option>
                                </select>
                            </div>
                        </form>
                        <h2 class="title">Thanh toán</h2>
                    </div>
                </div>
                <div class="col-md-4 payment-steps info-order">
                    <h4 class="payment-title">3. Thông tin đơn hàng</h4>
                    <div class="step-preview">
                        <div class="cart-info">
                            <img src="assets/images/products/salad_thit_nuong_vi_large.jpg" alt="">
                            <div class="name-product"><span>Xà lạch trộn kiểu Nga x 1</span></div>
                            <div class="price"><span>59,000 ₫</span></div>
                        </div>
                        <div class="cart-info">
                            <label>Thành tiền</label>
                            <label>59,000 ₫</label>
                        </div>
                        <div class="cart-info">
                            <label>Phí vận chuyển</label>
                            <label>₫</label>
                        </div>
                        <div class="cart-info">
                            <label>Thanh toán</label>
                            <label class="total-price">59,000 ₫</label>
                        </div>
                        <div class="success-order">
                            <a href="#" class="btn btn-dark">Đặt hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

            </div>
            <div class="row continue">
                <div class="col-md-12 continue-order">
                    <a href="#" class="btn btn-dark back-product">Tiếp tục mua hàng</a>
                    <a href="#" class="btn pay-continue">Đơn hàng của tôi</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection