<section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>تصفية حسب الفئة</h4>
                            <ul>
                                @foreach($categories as $item)
                                    <li><button class="catebtn" wire:click="getSearchByCategory('{{$item->name}}')">{{$item->name}}</button></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar__item">
                            <h4>الثمن</h4>
                            <div>
                                <ul>
                                    <li class="catebtn">
                                        <span wire:click="getSearchByPriceUp(10)">أكثر من 10 د.م</span>
                                    </li>
                                    <li class="catebtn">
                                        <span wire:click="getSearchByPriceBetween(20, 50)">بين 20 و 50 د.م </span>
                                    </li>
                                    <li class="catebtn">
                                        <span wire:click="getSearchByPriceBetween(51, 100)">بين 51 و 100 د.م</span>
                                    </li>
                                    <li class="catebtn">
                                        <span wire:click="getSearchByPriceUp(100)">أكثر من 100 د.م</span>
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
                                    <h6>
                                        المنتوجات المتوفرة
                                        <span>{{$nbr_products}}</span> 
                                    </h6>
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
                                                في السلة
                                            </button>
                                        @else
                                            <form wire:submit.prevent="addToCart({{$item->product}})" method="post">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{$item->product}}">
                                                <input type="hidden" name="qty" value="1">
                                                <button type="submit" class="add-to-cart-btn">
                                                    <i class="fa fa-shopping-cart"></i> اضف إلى السلة
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
                    <a href="#"><i class="fa fa-long-arrow-left"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>