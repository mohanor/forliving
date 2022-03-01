<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Events\NewNotification;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use Auth;
use DB;

class CartArController extends Controller
{
    public function checkout()
    {
        $order = Cart::content();
        $total = 0;

        foreach($order as $item)
        {
            $total += $item->options['total'];
        }
        return view('checkoutar')
            ->with([
                'order' => $order,
                'total' => $total
            ]);
    }
}
