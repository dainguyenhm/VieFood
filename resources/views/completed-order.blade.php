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
                        <li><a href="#"><strong>Hoàn tất</strong></a></li>
                    </ul>
                </div>
            </div>
            <div class="row list-product">
                <div class="list-product-title">
                    <h3><span>Hoàn tất</span></h3>
                </div>
            </div>
            <div class="row complete-order">
                <div class="col-md-12">
                    <div class="payment-order">
                        <h3>Mã đơn hàng của bạn: <b>#1000002</b></h3>
                        <p><b>Ngày đặt:</b> <i>23/12/2019</i></p>
                        <p><b>Phương thức thanh toán: <i></i></b></p>
                        <h4>Thông tin đơn hàng</h4>
                        <div class="cart-content">
                            <div class="modal-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>STT</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Giá tiền</th>
                                                <th>Số lượng</th>
                                                <th>Thành tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="line-item">
                                                <th scope="row" class="col-img">1</th>
                                                <td class="col-name">Xà lách trộn kiểu Nga</td>
                                                <td class="col-price">59,000 ₫</td>
                                                <td class="col-quanlity"><span>1</span></td>
                                                <th scope="col" class="col-price">59,000 ₫</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="total-payment">
                            <span><b>Tổng thanh toán: </b></span>
                            <span class="pay-price">118,000 ₫</span>
                        </div>
                    </div>
                </div>
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