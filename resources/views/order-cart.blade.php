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
                        <li><a href="#"><strong>Giỏ hàng</strong></a></li>
                    </ul>
                </div>
            </div>
            <div class="row list-product">
                <div class="list-product-title">
                    <h3><span>Giỏ hàng của tôi</span></h3>
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
                        <li class="col-md-3 col-xs-12 col-sm-4 col-md-offset-3 col-sm-offset-0 col-xs-offset-0">
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
            <div class="row cart-content">
                <div class="col-md-12 modal-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th></th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá tiền</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="line-item">
                                    <th scope="row" class="col-img"><img src="assets/images/products/salad_thit_nuong_vi_large.jpg" alt=""></th>
                                    <td class="col-name">Xà lách trộn kiểu Nga</td>
                                    <td class="col-price">59,000 ₫</td>
                                    <td class="col-quanlity">
                                        <div class="quantity-input">
                                            <input type="number" name="quantity" min="1" max="15" value="1">
                                        </div>
                                    </td>
                                    <th scope="col" class="col-price">59,000 ₫</th>
                                    <td class="col-option">
                                        <span class="remove-item">
                                            <i class="fas fa-trash-alt"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr class="line-item">
                                    <th scope="row" class="col-img"><img src="assets/images/products/salad_thit_nuong_vi_large.jpg" alt=""></th>
                                    <td class="col-name">Xà lách trộn kiểu Nga</td>
                                    <td class="col-price">59,000 ₫</td>
                                    <td class="col-quanlity">
                                        <div class="quantity-input">
                                            <input type="number" name="quantity" min="1" max="15" value="1">
                                        </div>
                                    </td>
                                    <th scope="col" class="col-price">59,000 ₫</th>
                                    <td class="col-option">
                                        <span class="remove-item">
                                            <i class="fas fa-trash-alt"></i>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 total-payment">
                    <span><b>Tổng thanh toán: </b></span>
                    <span class="pay-price">118,000 ₫</span>
                </div>
            </div>
            <div class="row continue">
                <div class="col-md-12 continue-order">
                    <a href="#" class="btn btn-dark back-product">Tiếp tục mua hàng</a>
                    <a href="#" class="btn pay-continue">Tiến hành thanh toán</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection