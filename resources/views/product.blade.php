@extends('layouts.master')
@section('content')
<!-- main -->
<div class="container">
    <div class="row main">
        @include('layouts.left-menu')
        <!-- list-product -->
        <div class="col-md-9 left-content">
            <div class="row">
                <div class="col-md-12 path-current">
                    <ul>
                        <li><a href="index.html">Trang chủ</a></li>
                        <li><i class="fas fa-angle-double-right"></i></li>
                        <li><a href=""><strong>Sản phẩm</strong></a></li>
                    </ul>
                </div>
            </div>
            <div class="row list-product">
                <div class="list-product-title">
                    <h3><span>Sản phẩm</span></h3>
                </div>
                <div class="list-product-filter">
                    <span>Sắp xếp&nbsp&nbsp</span>
                    <select>
                    <option checked="true">Mặc định</option>
                    <option>Giá giảm dần</option>
                    <option>Giá tăng dần</option>
                    <option>Tên sản phẩm: A to Z</option>
                    <option>Tên sản phẩm: Z to A</option>
                </select>
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
                <div class="col-md-3">
                    <div class="item product-item">
                        <img class="product-item-img" src="assets/images/products/pizza_nho_large.jpg" alt="">
                        <div class="name"><a href="#">Pizza nho</a></div>
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
                <div class="col-md-3">
                    <div class="item product-item">
                        <img class="product-item-img" src="assets/images/products/04_large.jpg" alt="">
                        <div class="name"><a href="#">Seafood cá ngừ</a></div>
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
                <div class="col-md-3">
                    <div class="item product-item">
                        <img class="product-item-img" src="assets/images/products/04_large.jpg" alt="">
                        <div class="name"><a href="#">Seafood cá ngừ</a></div>
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
                        <img class="product-item-img" src="assets/images/products/04_large.jpg" alt="">
                        <div class="name"><a href="#">Seafood cá ngừ</a></div>
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
                <div class="col-md-12">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fas fa-angle-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection