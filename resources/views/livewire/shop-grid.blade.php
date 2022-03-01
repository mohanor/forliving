<section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Filter By Category</h4>
                            <ul>
                                @foreach($categories as $item)
                                    <li><button class="catebtn" wire:click="getSearchByCategory('{{$item->name}}')">{{$item->name}}</button></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar__item">
                            <h4>Price</h4>
                            <div>
                                <ul>
                                    <li class="catebtn">
                                        <span wire:click="getSearchByPriceUp(10)">Up to 10 dh</span>
                                    </li>
                                    <li class="catebtn">
                                        <span wire:click="getSearchByPriceBetween(20, 50)">20 dh to 50 dh</span>
                                    </li>
                                    <li class="catebtn">
                                        <span wire:click="getSearchByPriceBetween(50, 100)">50 dh to 100 dh</span>
                                    </li>
                                    <li class="catebtn">
                                        <span wire:click="getSearchByPriceUp(100)">Up to 100 dh</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">

                <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-9 col-md-7"></div>
                            <div class="col-lg-3 col-md-5">
                                <div class="filter__found">
                                    <h6><span>{{$nbr_products}}</span> Products found</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    @foreach($products as $item)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg-1" style="background-image: url({{asset('/storage/images/' . $item->src . '')}})">
                                    <ul class="product__item__pic__hover">
                                        @if ($cart->where('id', $item->product)->count())
                                            <button class="add-to-cart-btn">
                                                in cart
                                            </button>
                                        @else
                                            <form wire:submit.prevent="addToCart({{$item->product}})" action="{{ route('cart.store')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{$item->product}}">
                                                <input type="hidden" name="qty" value="1">
                                                <button type="submit" class="add-to-cart-btn">
                                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                                </button>
                                            </form>
                                        @endif
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a class="a-product-title" href="{{ route('product-details', $item->product)}}">{{$item->title}}</a></h6>
                                    <h5>{{$item->price}} dh</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="product__pagination">
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>