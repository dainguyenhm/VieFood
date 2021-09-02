@extends('layouts.master')
@section('content')
<!-- main -->
<div class="container">
    <div class="row main">
        <!-- list-product -->
        <div class="col-md-12 left-content">
            <div class="row">
                <div class="col-md-12 path-current">
                    <ul>
                        <li><a href="index.html">Trang chủ</a></li>
                        <li><i class="fas fa-angle-double-right"></i></li>
                        <li><a href=""><strong>Kiểm tra đơn hàng</strong></a></li>
                    </ul>
                </div>
            </div>
            <div class="row list-product">
                <div class="list-product-title">
                    <h3><span>Kiểm tra đơn hàng</span></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 search-order">
                    <form action="">
                        <label>Nhập mã đơn hàng</label>
                        <input type="text" class="form-control" placeholder="Mã số đơn hàng (VD:1234567)">
                        <button type="submit" class="btn btn-dark">Xem ngay</button>
                    </form>
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