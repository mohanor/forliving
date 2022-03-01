<section class="shoping-cart spad">
        @if ($cart->count() == 0)   
        <div class="text-center">
            <div class="mb-3">
                <svg width="100" height="100" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                        <g transform="translate(3.401)">
                            <path d="m23 46c3.863 0 7 3.137 7 7s-3.137 7-7 7-7-3.137-7-7 3.137-7 7-7zm18 0c3.863 0 7 3.137 7 7s-3.137 7-7 7-7-3.137-7-7 3.137-7 7-7zm-18 2c2.76 0 5 2.24 5 5s-2.24 5-5 5-5-2.24-5-5 2.24-5 5-5zm18 0c2.76 0 5 2.24 5 5s-2.24 5-5 5-5-2.24-5-5 2.24-5 5-5zm-28-27h40.198l-4.363 24h-22.835v-2h21.165l3.637-20h-37.604l3.637 20h3.165v2h-4.835l-4.165-24v-7h-7v-2h9zm11 22h-2v2h2zm7.828-11.75 5.121-5.25 1.708 1.75-5.122 5.25 5.122 5.25-1.708 1.75-5.121-5.25-5.121 5.25-1.707-1.75 5.121-5.25-5.121-5.25 1.707-1.75z" fill="#000000" data-original="#000000">
                                
                            </path>
                        </g>
                    </g>
                </svg>
            </div>
            <h3>سلة مشترياتك فارغة حاليا</h3>
        </div>
        @else
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping_cart_table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">منتجات</th>
                                    <th>السعر</th>
                                    <th>كمية</th>
                                    <th>المجموع</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cart as $item)
                                    <tr>
                                        <td class="shoping__cart__item td-avatar" style="height: 150px;">
                                        <div class="div_img_td">
                                            <img style="height: 100%;" src="{{ asset('/storage/images/' . $item->options['src'] . '')}}" alt="">
                                        </div>
                                            <h5>{{$item->name}}</h5>
                                        </td>
                                        <td class="shoping__cart__price">
                                            {{$item->price}} د.م
                                        </td>
                                        <td class="shoping__cart__quantity">
                                            <div class="newquantity">
                                                <div class="pro-qty-n">
                                                    <button wire:click="moisQty('{{ $item->rowId }}')" class="dec qtybtn">-</button>
                                                    <input type="text" value="{{$item->qty}}" class="input-qty" readonly>
                                                    <button class="inc qtybtn" wire:click="plusQty('{{ $item->rowId }}')">+</button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="shoping__cart__total">
                                            {{$item->options['total']}} د.م
                                        </td>
                                        <td class="shoping__cart__item__close">
                                            <button class="icon_close" wire:click="removeFromCart('{{ $item->rowId }}')"></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping_cart_btns">
                        <a href="#" class="primary-btn cart-btn">مواصلة التسوق</a>
                    </div>
                </div>
                <div class="col-lg-6"></div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>إجمالي سلة التسوق</h5>
                        <ul>
                            <li>المجموع<span>{{ $total}} د.م</span></li>
                        </ul>
                        <a href="{{ route('checkout.ar')}}" class="primary-btn">الدفع</a>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </section>