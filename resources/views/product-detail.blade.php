@extends('layouts.master')
@section('content')
<!-- main -->
<div class="container">
    <div class="row main">
        <div class="col-md-3">
            <div class="menu-product-title container">
                <div class="row">
                    <h3><span>CHÍNH SÁCH BÁN HÀNG</span></h3>
                </div>
            </div>
            <div class="sale-policy container">
                <ul>
                    <li>Giao hàng bán kính 10km</li>
                    <li>Thanh toán khi nhận hàng</li>
                    <li>Chất lượng đảm bảo</li>
                    <li>Miễn phí vận chuyển: <strong>Đơn hàng từ 3 món trở lên</strong></li>
                </ul>
            </div>
            @include('layouts.left-banner')
        </div>
<!-- list-product -->
        <div class="col-md-9 left-content">
            <div class="row">
                <div class="col-md-12 path-current">
                    <ul>
                        <li><a href="index.html">Trang chủ</a></li>
                        <li><i class="fas fa-angle-double-right"></i></li>
                        <li><a href="product.html">Sản phẩm</a></li>
                        <li><i class="fas fa-angle-double-right"></i></li>
                        <li><a href="product.html"><strong>Xà lách trộn kiểu Nga</strong></a></li>
                    </ul>
                </div>
            </div>
            <div class="row product-detail">
                <div class="col-md-6 col-sm-6 col-xs-12 product-detail-img">	
                    <img id="img-product" src="assets/images/products/salad_thit_nuong_vi_large.jpg" alt="Xà lách trộn kiểu Nga">
                </div>
                <div class="modal-img">
                    <div id="modal-image" class="modal">
                        <span class="close">&times;</span>
                        <img class="modal-content" id="img01">
                        <div id="caption"></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 product-detail-info">
                    <h2>Xà lách trộn kiểu Nga</h2>
                    <div class="price-product">
                         <span href="#" class="unit-price">59,000 ₫</span>
                         <span href="#" class="promote-price">70,000 ₫</span>
                     </div>
                     <div class="code-product"><span>Mã SP: </span></div>
                     <div class="description-product">
                         <span>Món salad Nga luôn tươi ngon và hấp dẫn những ai thưởng thức.</span>
                     </div>
                     <div class="social">
                         <a href="#">like</a>
                         <a href="#">share</a>
                     </div>
                     <div class="quantity">
                         <div class="quantity-input">
                             <label>Số lượng:</label>
                             <input type="number" name="quantity" min="1" max="15" value="1">
                         </div>
                     </div>
                     <div class="shopping-cart">
                         <span id="add-cart" class="btn btn-dark"><i class="fas fa-shopping-cart"></i> Giỏ hàng</span>
                         <a href="" onclick="addToCardBuy()" class="btn btn-primary">Mua ngay</a>
                     </div>
                </div>
                <div class="modal-cart">
                    <div id="modal-cart" class="modal">
                        <div class="cart-content container">
                            <div class="modal-header row">
                                <span class="close-cart">&times;</span>
                                <h4 class="modal-title">Giỏ hàng: 1 sản phẩm </h4>
                            </div>
                            <div class="modal-body row">
                                <div class="col-md-12">
                                    <div class="table-responsive|table-responsive-sm|table-responsive-md|table-responsive-lg|table-responsive-xl">
                                        <table class="table table-striped|table-dark|table-bordered|table-sm">
                                            <thead class="thead-dark|">
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col">Tên sản phẩm</th>
                                                    <th scope="col">Số lượng</th>
                                                    <th scope="col">Giá tiền</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="line-item">
                                                    <th scope="row" class="col-img"><img src="assets/images/products/salad_thit_nuong_vi_large.jpg" alt=""></th>
                                                    <td class="col-name">Xà lách trộn kiểu Nga</td>
                                                    <td class="col-quanlity">
                                                        <div class="quantity-input">
                                                            <input type="number" name="quantity" min="1" max="15" value="1">
                                                        </div>
                                                    </td>
                                                    <td class="col-price">59,000 ₫</td>
                                                    <td class="col-option">
                                                        <span class="remove-item">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr class="line-item">
                                                    <th scope="row" class="col-img"><img src="assets/images/products/salad_thit_nuong_vi_large.jpg" alt=""></th>
                                                    <td class="col-name">Xà lách trộn kiểu Nga</td>
                                                    <td class="col-quanlity">
                                                        <div class="quantity-input">
                                                            <input type="number" name="quantity" min="1" max="15" value="1">
                                                        </div>
                                                    </td>	
                                                    <td class="col-price">59,000 ₫</td>
                                                    <td class="col-option">
                                                        <span class="remove-item">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr class="line-item">
                                                    <th scope="row" class="col-img"><img src="assets/images/products/salad_thit_nuong_vi_large.jpg" alt=""></th>
                                                    <td class="col-name">Xà lách trộn kiểu Nga</td>
                                                    <td class="col-quanlity">
                                                        <div class="quantity-input">
                                                            <input type="number" name="quantity" min="1" max="15" value="1">
                                                        </div>
                                                    </td>	
                                                    <td class="col-price">59,000 ₫</td>
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
                                <div class="col-md-12 total-price"><span><strong>Tổng tiền:</strong> 118,000 ₫</span></div>
                            </div>
                            <div class="row comeback-order">
                                <div class="col-md-6 come-back">
                                    <a href="product.html"><i class="fas fa-chevron-circle-left"></i> Tiếp tục mua hàng</a>
                                </div>
                                <div class="col-md-6 order-cart"><a href="#" class="btn btn-dark">Đặt hàng</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 product-tabs">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Chi tiết sản phẩm</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Sản phẩm hot</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <p class="description-summary">
                                Pizza phủ xúc xích, thịt bò, ớt chuông, nấm rơm và hành tây.
                            </p>
                            <p class="description-content">
                                Món pizza vẫn luôn là món khoái khẩu cho các chị em trong những dịp đi chơi hay gọi đến nhà đều rất tiện lợi
                            </p>
                            <img src="assets/images/products/salad_thit_nuong_vi_large.jpg" alt="">
                        </div>
                        <div class="tab-pane fade container" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="row list-product" style="padding-top: 15px;">
                                <div class="col-md-3">
                                    <div class="item product-item">
                                        <img class="product-item-img" src="assets/images/products/salad__thit_xong_khoi_large.jpg" alt="">
                                        <div class="name"><a href="#">Thịt xông khói</a></div>
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
                                        <img class="product-item-img" src="assets/images/products/supreme_pizza_large.jpg" alt="">
                                        <div class="name"><a href="#">Supreme pizza</a></div>
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
                                        <img class="product-item-img" src="assets/images/products/sup_ngheu_large.jpg" alt="">
                                        <div class="name"><a href="#">Súp nghêu</a></div>
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
                                        <img class="product-item-img" src="assets/images/products/sup_tom_large.jpg" alt="">
                                        <div class="name"><a href="#">Súp tôm Nho</a></div>
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
                            <div class="row">
                                <div class="col-md-12 load-more">
                                    <a href="#">Xem thêm <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection