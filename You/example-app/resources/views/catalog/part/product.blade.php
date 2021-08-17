    <div class="col-12 col-sm-6 col-lg-4">
        <div class="single-product-wrapper">
            <!-- Product Image -->
            <div class="product-img">
                <img src="{{Storage::url($product->image)}}" alt="">
                <!-- Hover Thumb -->
                <img class="hover-img" src="{{asset('img/product-img/product-2.jpg')}}" alt="">

                <!-- Product Badge -->
                <div class="product-badge offer-badge">
                    <span>-30%</span>
                </div>
                <!-- Favourite -->
                <div class="product-favourite">
                    <a href="#" class="favme fa fa-heart"></a>
                </div>
            </div>

            <!-- Product Description -->
            <div class="hover-content">
            <div class="add-to-cart-btn">
                <form action="{{ route('basket-add', $product) }}" 
                    method="post" class="d-inline">
                    @csrf
                    <button type="submit" class="btn essence-btn">Add to Cart</button>
                </form>
            </div>
            </div>
            <div class="product-description">
                <span>{{ $product->getBrand()->name }}</span>
                <a href="{{route('catalog.product', ['slug' => $product->slug])}}">
                    <h6>{{ $product->name }}</h6>
                </a>
                <p class="product-price">${{ $product->price }}</p>

                <!-- Hover Content -->
                
                    <!-- Add to Cart -->
                    <div class="add-to-cart-btn">
                        <form action="{{ route('basket-add', $product) }}" 
                            method="post" class="d-inline">
                            @csrf
                            <button type="submit" class="btn essence-btn">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>