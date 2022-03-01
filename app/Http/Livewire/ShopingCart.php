<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class ShopingCart extends Component
{

    public $total = 0;

    public function removeFromCart($rowId)
    {
        $cart = Cart::content();
        
        Cart::remove($rowId);

        $this->emit('cart_updated');
    }

    public function plusQty($rowId)
    {
        $item = Cart::get($rowId);
        
        Cart::update($rowId, $item->qty + 1);

        $this->total($item);
    }

    public function moisQty($rowId)
    {
        $item = Cart::get($rowId);
        
        if ($item->qty > 1)
        {
            Cart::update($rowId, $item->qty - 1);
            $this->total($item);
        }
    }

    public function total($item)
    {
        Cart::update($item->rowId, ['options'  =>[
            'src' => $item->options['src'],
            'total' => $item->qty * $item->price
        ]]);
    }

    public function render()
    {
        $cart = Cart::content();
        $this->total = 0;
        foreach($cart as $item)
        {
            $this->total += $item->options['total'];
        }

        return view('livewire.shoping-cart')->with(['cart' => $cart]);
    }
}
