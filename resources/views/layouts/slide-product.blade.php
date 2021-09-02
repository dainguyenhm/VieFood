<!-- slide-product -->
        <div class="container-fluid">
            <div class="container slide-products">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="default-title">SẢN PHẨM NỔI BẬT</h5>
                    </div>
                </div>
                <div id="owl-demo" class="row products owl-carousel owl-theme row" style="padding-left: 35px">
                    @foreach ($slide_products as $key => $product)
                        <div class="item product-item">
                            <img class="product-item-img" src="images/uploads/products/{{ $product->image }}" alt="">
                            <div class="name"><a href="{{ route('products.show', ['id' => $product->id]) }}">{{ $product->name }}</a></div>
                            <div class="price">
                                <a href="{{ route('products.show', ['id' => $product->id]) }}" class="unit-price">{{ number_format($product->unit_price - $product->discount * $product->unit_price ) }}</a>
                                <a href="{{ route('products.show', ['id' => $product->id]) }}" class="promote-price">{{ number_format($product->unit_price) }}</a>
                            </div>
                            <div class="add-cart">
                                <div class="add-cart-button">
                                    <button>Mua hàng</button>
                                    <i class="fas fa-cart-plus"></i>
                                </div>
                            </div>
                        </div> 
                    @endforeach
                </div>
                <div class="customNavigation">
                    <a class="btn prev"><i class="fa fa-angle-left"></i></a>
                    <a class="btn next"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>