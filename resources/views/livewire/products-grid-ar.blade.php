
<section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>منتجات فوريفر</h2>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                @foreach($products as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">
                        <div class="featured__item">
                            <div class="featured__item__pic m-set-bg" style="background-image: url({{asset('/storage/images/' . $item->src . '')}})">
                                <ul class="featured__item__pic__hover d-flex justify-content-center">
                                    @if ($cart->where('id', $item->product)->count())
                                        <li>
                                            <button class="add-to-cart-btn">
                                                في السلة
                                            </button>
                                        </li>
                                    @else
                                        <form wire:submit.prevent="addToCart({{$item->product}})" action="{{ route('cart.store')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{$item->product}}">
                                            <input type="hidden" name="qty" value="1">
                                            <button type="submit" class="add-to-cart-btn">
                                                <i class="fa fa-shopping-cart"></i> أضف إلى السلة
                                            </button>
                                        </form>
                                    @endif
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a class="to-details" href="{{ route('product-details-ar', $item->product)}}">{{$item->title}}</a></h6>
                                <div>
                                    <img src="{{ asset('img/media/rate.svg')}}" alt="">
                                </div>
                                <h5>{{ $item->price}} د.م</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="text-center">
            <button class="load-more-btn" wire:click="loadMore">المزيد</button>
        </div>
</section>