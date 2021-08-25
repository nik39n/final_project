    <div class="col-12 col-sm-6 col-lg-4">
        <div class="single-product-wrapper">
            <!-- Product Image -->
            <div class="product-img">
                <div class="labels">
                    @if($product->isNew())
                            <span class="badge badge-success">Новинка</span>
                    @endif
                    @if($product->isRecommend())
                            <span class="badge badge-warning">Рекомендуемое</span>
                    @endif
                    @if($product->isHit())
                            <span class="badge badge-danger">Хит</span>
                    @endif
                </div>
                <img src="{{Storage::url($product->image)}}" alt="">
                <!-- Hover Thumb -->
                <img class="hover-img" src="{{asset('img/product-im g/product-2.jpg')}}" alt="">

                <!-- Product Badge -->
                

                
            </div>
            <!-- Product Description -->
            <div class="add-to-cart-btn">
                <form action="{{ route('basket-add', $product) }}" 
                    method="post" class="d-inline">
                    @csrf
                    <button type="submit" class="btn essence-btn">Add to Cart</button>
                </form>
            </div>
            <div class="product-description">
                <span>@isset($product->brand->name){{ $product->brand->name }}@else @endisset</span>
                <a href="{{route('catalog.product', ['slug' => $product->slug])}}">
                    <h6>{{ $product->name }}</h6>
                </a>
                <p class="product-price">${{ $product->price }}</p>

            </div>
        </div>
    </div>