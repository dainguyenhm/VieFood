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
                    <li class="active"><a href="#"><i class="fas fa-file-invoice"></i> Đơn hàng của tôi</a></li>
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
                        <li><a href=""><strong>Đơn hàng của tôi</strong></a></li>
                    </ul>
                </div>
            </div>
            <div class="row list-product">
                <div class="list-product-title">
                    <h3><span>Đơn hàng của tôi</span></h3>
                </div>
            </div>
            <div class="row cart-content">
                <div class="col-md-12 list-order modal-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>STT</th>
                                    <th>Mã đơn hàng</th>
                                    <th>Tên khách hàng</th>
                                    <th>Tổng tiền</th>
                                    <th>Vận chuyển</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="line-item">
                                    <th scope="row" class="col-img">1</th>
                                    <td class="col-name">#1000001</td>
                                    <th scope="col">Nguyễn Tú Điền</th>
                                    <td class="col-price">59,000 ₫</td>
                                    <td>Giao hàng tiết kiệm</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection